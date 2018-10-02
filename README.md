# ludoStore
## Equipe

### Scrum Master
- Lucas de Pace

### Padrinhos
- Matheus Avila
- Fernanda

### Desenvolvedores
- Yan
- Felippe
- Ana Mendes
- Carol Vieira




RP DA LIGA DIA 20/10


## GIT TUTORIAL
### Primeira configuração

- Entre na pasta onde irá guardar o projeto: cd /caminho/para/a/pasta

- Inicialize o git na pasta: git init

- Crie um clone do repositório: git clone https://github.com/lucas-pace/ludoStore.git

- Entre na pasta criada pelo comando clone: cd /caminho/para/a/pasta/nova

- Crie sua branch usando como o padrão seu primeiro nome começando com letra minúscula: git checkout -b primeironome
### Rotina
- Adicione as alterações feitas: git add *

- Cheque em qual branch está e quais alterações foram adicionadas: git status

- Dê um commit com uma mensagem especificando as alterações realizadas: git commit -m "mensagem especificando o que foi feito"

- Envie o commit feito para sua branch: git push origin suabranch

- Volte para a master: git checkout master
### Quando estiver tudo prontinho
- Mescle a master com as alterações enviadas para sua branch (apenas quando solicitado pelo SM): git merge suabranch

- Confirme o merge (apenas quando solicitado pelo SM): git push origin master

- Para atualizar a master: git pull

- Para atualizar alguma branch: git pull origin branch

- Para mesclar sua branch com a master (estando dentro da sua branch): git merge master

- Para confirmar o merge: git push origin suabranch
