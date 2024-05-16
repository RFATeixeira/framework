<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">

<style>
    .estilo {
        font-family: "Comfortaa", sans-serif;
    }
</style>

<div class="container">
    <div class="col text-center display-1">
        <h1 class="estilo">Seja Bem vindo ao meu Framework</h1>
        <h2 class="estilo fs-3">Digite o nome e clique em uma das opções para receber seu retorno!</h2>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        <label for="nameI" class="fw-bold fs-5 row m-1 justify-content-center estilo">NOME</label>
        <div class="col-12 d-flex justify-content-center">
            <input type="text" id="nameI" name="name">
        </div>
        <div class="col-12 d-flex justify-content-center">
            <a id="helloL" href="http://localhost:4321/hello" class="btn btn-outline-dark m-2 estilo">Olá</a>
            <a id="byeL" href="http://localhost:4321/bye" class="btn btn-outline-secondary m-2 estilo">Tchau</a>
        </div>
    </div>
</div>

<script>
    document.getElementById("helloL").addEventListener("click", function (event) {

        let name = document.getElementById("nameI").value;
        if (name) {
            this.href = "http://localhost:4321/hello/" + encodeURIComponent(name);
        }

    });

    document.getElementById("byeL").addEventListener("click", function (event) {
    });
</script>