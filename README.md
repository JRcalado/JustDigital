#  back-end
API REST PHP 
Autenticação via WEB Token (JWT)
## Requisitos
- PHP 7.x
- MYSQL
## Bibliotecas usadas
- *aura/router: Paras Rotas 
- *zendframework/zend-diactoros: Respose e Request 
- *xtreamwayz/pimple-container-interop: Container de serviços
- *illuminate/database: ORM 


#  front-end
## Bibliotecas usadas
- *Jquery

#  Intalação API
- * git clone https://github.com/JRcalado/JustDigital.git
- * cd  api/
- *



## Restrições
 - *Não é permitido o uso de frameworks de CMS ou MVC, apenas bibliotecas*

## Requisitos mínimos do CMS

As seguintes funcionalidades são esperadas na aplicação:

- Sistema de login
- Criação e edição de conteúdos (posts) com os campos:
  - título
  - corpo
  - path (exemplo: /noticias/titulo-do-post
- Visualização do conteúdo
- Listagem de conteúdos
- As páginas criadas devem ser acessíveis pela rota no "path"

## Não faço back-end

Caso você não programe back-end, o desafio será criar apenas os temas do site:

- Homepage (listando os últimos posts)
- Detalhe do post (ilustrar cenários onde há novos campos no conteúdo post)
- Formuĺário de criação e edição do post

Lembrando que não é necessário aplicar nenhum funcionamento no back-end caso você não faça frontend

## Não faço front-end

Caso você não faça front-end, todos os endpoints devem ser feitos usando endpoints JSON.

Em resumo, você fará uma API que exibe os detalhes, a listagem e a criação / edição / remoção de posts.

## Bônus adicionais

1. Testes de unidade / comportamento
2. Utilizar taskrunners
3. Código padronizado
4. Código comentado com explicações
5. Criar Dockerfile correspondente ao projeto