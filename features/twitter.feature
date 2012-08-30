# language: pt
@twitter
Funcionalidade: Pesquisar no Twitter
    Pegar feed do twitter e exibe
  
  Contexto:
    Dado Eu estar em "/"

  @javascript
  Esquema do Cenário: Pesquisar Twitter
    Quando Eu preenchi o "searchInput" com <tag>
    E Eu carrego no botão "searchButton"
    Então Eu devo ver "Resultados"
    E Deve ter na tela o elemento "div.twitter"
    E Deve ter na tela o elemento "img.user"
    E Eu devo ver <tag>

    Exemplos:
      |tag        |
      |"linguagil"|
      |"BDD"      |

  @teste
  Cenário: Pesquisar Twitter e não tem resultados
    Quando Eu preenchi o "searchInput" com "wsdcvvfd"
    E Eu carrego no botão "searchButton"
    Então Eu devo ver "Sem Resultados"