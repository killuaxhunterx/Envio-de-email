# Projeto de Envio de E-mails

Este é um projeto simples de envio de e-mails criado utilizando HTML como base e integrado com PHP para o envio das mensagens. 

## Funcionalidades

- Envio de e-mails personalizados.
- Configuração de remetente, destinatário e assunto.
- Interface básica para preenchimento de campos de mensagem.

## Pré-requisitos

Para executar o projeto, é necessário:

1. Servidor local configurado (XAMPP).
2. PHP instalado (versão mínima recomendada: 7.4).
3. Acesso à internet para testar o envio de e-mails (caso o servidor SMTP esteja configurado para isso).

4. Inicie o servidor Apache no XAMPP.

5. Acesse o projeto no navegador:
   ```
   http://localhost/seu-projeto
   ```

## Estrutura do Projeto

- `index.html`: Formulário HTML para coleta dos dados do e-mail.
- `send_email.php`: Script PHP responsável por processar e enviar os e-mails.

## Como Usar

1. Abra o formulário no navegador.
2. Preencha os campos de destinatário, assunto e mensagem.
3. Clique no botão "Enviar".
4. Verifique se o e-mail foi enviado corretamente (mensagem de sucesso ou erro será exibida na tela).

## Tecnologias Utilizadas

- **HTML**: Para criar o formulário de envio.
- **PHP**: Para processar e enviar os e-mails.
