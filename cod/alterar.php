<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <?php
        include "conecta.php";
        $texto = $_POST['texto'];
        $tipo = $_POST['tipo'];
        $sql = "UPDATE base SET texto = '$texto' WHERE tipo = '$tipo'";
        $query = $auau->query($sql);

        if($query){ ?>
            <!--https://sweetalert2.github.io/ site para criar alerts em javascript-->
            <script language="javascript">
            Swal.fire({
                title: 'Salvo',
                text: 'Texto Atualizado com Sucesso!',
                icon: 'success',
                confirmButtonText:'Ok'
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    location.href="../adm/index.php";
                }
                })
            </script>
        <?php }else{ ?>
            <script language="javascript">
            Swal.fire({
                title: 'Ops :/',
                text: 'Algo de errado não está certo.',
                icon: 'error',
                confirmButtonText:'Ok'
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    location.href="../adm/index.php";
                }
                })
            </script>
        <?php  } ?> 
    </body>
</html>


