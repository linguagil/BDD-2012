# language: pt
Funcionalidade: Pesquisar no Wikipedia
  Pesquisar no Wikipedia

  @javascript
  Cenário: Pesquisar por BDD
    Dado Eu estar em "/"
    Quando Eu preenchi o "searchInput" com "BDD"
    E Eu carrego no botão "searchButton"
    Então Eu devo ver "Behavior Driven Development (secção Práticas de BDD)"
