<?php
$csvUrl = 'https://palestra.vivianenunesfinancas.com.br/inscricoes.csv';
$csvContent = file_get_contents($csvUrl);
$linhas = explode(PHP_EOL, $csvContent);
$inscricoes = [];

foreach ($linhas as $linha) {
    $campos = str_getcsv($linha, ';');
    if (count($campos) >= 3 && !empty(trim($campos[0]))) {
        $inscricoes[] = $campos;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Inscrições Realizadas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background: #f9f9f9;
        }

        h2 {
            margin-bottom: 20px;
        }

        table.dataTable thead th {
            background-color: #007BFF;
            color: white;
        }

        .whatsapp-btn {
            background-color: #25d366;
            color: white;
            border: none;
            padding: 6px 10px;
            border-radius: 5px;
            font-size: 14px;
            text-decoration: none;
        }

        .whatsapp-btn:hover {
            background-color: #1ebc59;
        }

        .dataTables_wrapper .dataTables_filter input {
            margin-left: 0.5em;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Inscrições Realizadas - Palestra 20/06/2025</h2>
        <div class="table-responsive">
            <table id="inscricoes" class="table table-bordered table-striped display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th><i class="fas fa-calendar-alt"></i> Data e Hora</th>
                        <th><i class="fas fa-user"></i> Nome</th>
                        <th><i class="fas fa-envelope"></i> Email</th>
                        <th><i class="fas fa-phone"></i> Telefone</th>
                        <th><i class="fas fa-comments"></i> Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $dados = array_slice($inscricoes, 1);
                    foreach ($dados as $linha):
                        $data = htmlspecialchars(trim($linha[0]));
                        $nome = htmlspecialchars(trim($linha[1]));
                        $email = htmlspecialchars(trim($linha[2]));
                        $telefoneOriginal = trim($linha[3]);
                        $telefoneNumerico = preg_replace('/\D/', '', $telefoneOriginal);
                        $linkWhats = strlen($telefoneNumerico) >= 10 ? "https://wa.me/55{$telefoneNumerico}" : "#";
                        $botaoWhats = strlen($telefoneNumerico) >= 10
                            ? "<a class='whatsapp-btn' href='{$linkWhats}' target='_blank'><i class='fab fa-whatsapp'></i> Chamar</a>"
                            : "<span class='text-muted'>Inválido</span>";
                    ?>
                        <tr>
                            <td><?= $data ?></td>
                            <td><?= $nome ?></td>
                            <td><?= $email ?></td>
                            <td><?= $telefoneOriginal ?></td>
                            <td><?= $botaoWhats ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#inscricoes').DataTable({
                responsive: true,
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json"
                }
            });
        });
    </script>

</body>

</html>