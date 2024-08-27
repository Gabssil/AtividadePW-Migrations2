<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corinthians</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<style>
    .carousel-item img {
        height: 500px; /* Altere esse valor conforme necessário */
        object-fit: cover; /* Para manter a proporção da imagem */
    }
    .navbar {
            width: 100%; /* Definindo a largura para 100% */
        }
        @media only screen and (max-width: 600px) {
  body {
    background-color: lightblue;
  }
}
        .rounded-img {
            border-radius: 10px; /* Define o raio da borda */
        }
        /* Estilo para o rodapé */
footer {
  background-color: black; /* Cor de fundo do rodapé */
  color: #fff; /* Cor do texto */
  padding: 40px 0; /* Espaçamento interno (40px em cima e embaixo, 0 nos lados) */
}

/* Estilo para os títulos dentro do rodapé */
footer h3 {
  color: #fff; /* Cor dos títulos */
}

/* Estilo para os links no rodapé */
footer a {
  color: #fff; /* Cor dos links */
  text-decoration: none; /* Remover sublinhado padrão */
}

/* Estilo para os links no rodapé quando passados */
footer a:hover {
  text-decoration: underline; /* Adicionar sublinhado ao passar o mouse */
}

/* Estilo para os parágrafos dentro do rodapé */
footer p {
  margin-bottom: 10px; /* Espaçamento inferior */
}

/* Estilo para o texto de direitos autorais */
footer .text-center {
  margin-top: 20px; /* Espaçamento superior */
}
.custom-input {
    background-color: #FFFFFF; 
    color: #919FAE; 
    padding: 0.75rem 1rem; 
    border-radius: 40px;
    width: 80%; 
    max-width: 400px; 
    border: none; 
    margin: 0 auto; 
    display: block; 
    outline: none; 
}

.custom-input::placeholder {
    color: #919FAE; 
}

.custom-input:focus {
    outline: none; 
}

    </style>
</style>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/corinthians.png" alt="Bootstrap" width="50" height="40">
            </a>
            <a class="nav-link" href="welcome">inicio</a>
            <a class="nav-link" href="quemsomos">Quem somos</a>
            <a class="nav-link" href="contato">Contato</a>
        </div>
    </nav>
    <div class="content container">
        <h1>Contato</h1>

                    <form action="/contato" method="POST" style="margin-top: 20px;">
                        @csrf
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="motivo_contato" class="form-label">Motivo do Contato</label>
                            <textarea class="form-control" id="motivo_contato" name="motivo_contato" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    
                        @if(isset($data))
                        <div class="mt-5">
                            <h2>Dados Recebidos</h2>
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Nome:</strong> {{ $data['nome'] }}</li>
                                <li class="list-group-item"><strong>Telefone:</strong> {{ $data['telefone'] }}</li>
                                <li class="list-group-item"><strong>Email:</strong> {{ $data['email'] }}</li>
                                <li class="list-group-item"><strong>Motivo do Contato:</strong> {{ $data['motivo_contato'] }}</li>
                                <li class="list-group-item"><strong>Mensagem:</strong> {{ $data['mensagem'] }}</li>
                            </ul>
                        </div>
                        @endif
                    </form>
                    
                </div>
                
            </div>
    </div>
</body>

</html>
