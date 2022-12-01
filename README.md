# Benchmark Match PHP 8+

Neste simples projeto, vamos colocar em prática o benchmark do Laravel para avaliar qual recurso é mais performático.<br>
Para isso, iremos comparar a performance do:

-   Switch
-   If Else Frouxe(==)
-   If Else Estrito(===)
-   Match

Além disso, para compreensão deste vídeo foi gerado um vídeo que está disponível no link abaixo:

# Instalação

Este projeto foi feito com Laravel utilizando o Larave Sail, então para execução do mesmo, basta que você possua Docker rodando em sua máquina, e o nosso querido WSL2. Tendo isso ok em sua máquina, basta então fazer o clone do projeto em seu ambiente WSL2 e executar:

> ./vendor/bin/sail up -d

Pronto, com isso você já terá o projeto em executação e poderá acessar em
[localhost](http://localhost).

Para testar os recursos, foi criado duas rotas:

-   /exemplo1
-   /exemplo2

Todas as rotas desenvolvidas estão disponíveis no [web.php](./routes/web.php)
