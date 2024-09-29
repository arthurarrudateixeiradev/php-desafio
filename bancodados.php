<?php
$sql = "INSERT INTO usuarios (nome, email, senha, data_nascimento)
VALUES ('João da Silva', 'joao@example.com', 'senha123', '1990-01-01')";

if ($conn->query($sql) === TRUE) {
  echo "Novo usuário criado com sucesso";
} else {
  echo "Erro ao criar usuário: " . $conn->error;
}

?>