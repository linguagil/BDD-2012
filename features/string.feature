# language: pt
@string
Funcionalidade: Funções de String
  Como um desenvolvedor
  Eu vou criar funções de string
  Para me ajudar no desenvolvimento

  Cenário: Reverter uma String
    Dado que eu tenho uma string "BDD"
    Quando eu usar a função "strrev"
    Então eu tenho como resultado "DDB"

  Cenário: Tamanho da String
    Dado que eu tenho uma string "Curso de BDD"
    Quando eu usar a função "strlen"
    Então eu tenho como resultado 12