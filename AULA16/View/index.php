<?php

namespace AULA15;
require_once __DIR__ . '/../controller/Bebidacontroller.php';

$controller = new Bebidacontroller();

// Inicializa variável de edição
$bebidaEditando = null;

// Ações da página
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'salvar') {
        $controller->criar($_POST['nome'], $_POST['categoria'], $_POST['volume'], $_POST['valor'], $_POST['qtde']);
    } elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['nome']);
    } elseif ($_POST['acao'] === 'editar') {
        $lista = $controller->ler();
        $bebidaEditando = $lista[$_POST['nome']] ?? null;
    } elseif ($_POST['acao'] === 'atualizar') {
        $controller->atualizar($_POST['nomeAntigo'], $_POST['nome'], $_POST['categoria'], $_POST['volume'], $_POST['valor'], $_POST['qtde']);
    }
}

$lista = $controller->ler();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Bebidas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background: #f6f6f6;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        input, select, button {
            padding: 8px;
            margin: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background: #f0f0f0;
        }

        button {
            background: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #45a049;
        }

        .delete-btn {
            background: #e74c3c;
        }

        .delete-btn:hover {
            background: #c0392b;
        }

        .edit-btn {
            background: #3498db;
        }

        .edit-btn:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>

<h1>Gerenciamento de Bebidas</h1>

<!-- Formulário -->
<form method="POST">
    <?php if ($bebidaEditando): ?>
        <h3>Editando: <?= htmlspecialchars($bebidaEditando->getNome()) ?></h3>
        <input type="hidden" name="acao" value="atualizar">
        <input type="hidden" name="nomeAntigo" value="<?= htmlspecialchars($bebidaEditando->getNome()) ?>">
        <input type="text" name="nome" value="<?= htmlspecialchars($bebidaEditando->getNome()) ?>" required>
    <?php else: ?>
        <input type="hidden" name="acao" value="salvar">
        <input type="text" name="nome" placeholder="Nome da bebida:" required>
    <?php endif; ?>

    <select name="categoria" required>
        <option value="">Selecione a categoria</option>
        <?php
        $categorias = ["Refrigerante", "Cerveja", "Vinho", "Destilado", "Água", "Suco", "Energético"];
        foreach ($categorias as $cat):
            $selected = ($bebidaEditando && $bebidaEditando->getCategoria() === $cat) ? 'selected' : '';
            echo "<option value='$cat' $selected>$cat</option>";
        endforeach;
        ?>
    </select>

    <input type="text" name="volume" placeholder="Volume (ex: 300ml):" required
           value="<?= $bebidaEditando ? htmlspecialchars($bebidaEditando->getVolume()) : '' ?>">
    <input type="number" name="valor" step="0.01" placeholder="Valor em Reais (R$):" required
           value="<?= $bebidaEditando ? htmlspecialchars($bebidaEditando->getValor()) : '' ?>">
    <input type="number" name="qtde" placeholder="Quantidade em estoque:" required
           value="<?= $bebidaEditando ? htmlspecialchars($bebidaEditando->getQtde()) : '' ?>">

    <button type="submit"><?= $bebidaEditando ? 'Atualizar' : 'Cadastrar' ?></button>

    <?php if ($bebidaEditando): ?>
        <a href="<?= $_SERVER['PHP_SELF'] ?>">Cancelar</a>
    <?php endif; ?>
</form>

<!-- Tabela -->
<?php if (!empty($lista)) : ?>
    <table>
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Volume</th>
            <th>Valor (R$)</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($lista as $bebida): ?>
            <tr>
                <td><?= htmlspecialchars($bebida->getNome()) ?></td>
                <td><?= htmlspecialchars($bebida->getCategoria()) ?></td>
                <td><?= htmlspecialchars($bebida->getVolume()) ?></td>
                <td><?= htmlspecialchars(number_format($bebida->getValor(), 2, ',', '.')) ?></td>
                <td><?= htmlspecialchars($bebida->getQtde()) ?></td>
                <td>
                    <!-- Botão Editar -->
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="acao" value="editar">
                        <input type="hidden" name="nome" value="<?= htmlspecialchars($bebida->getNome()) ?>">
                        <button type="submit" class="edit-btn">Editar</button>
                    </form>

                    <!-- Botão Excluir -->
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="acao" value="deletar">
                        <input type="hidden" name="nome" value="<?= htmlspecialchars($bebida->getNome()) ?>">
                        <button type="submit" class="delete-btn" onclick="return confirm('Tem certeza que deseja excluir esta bebida?')">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <p style="text-align:center;">Nenhuma bebida cadastrada.</p>
<?php endif; ?>

</body>
</html>
