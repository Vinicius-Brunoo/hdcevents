# hdcevents

Projeto Laravel preparado para o praticando de deploy no EC2 com GitHub Actions.

## O que ja esta pronto

- Aplicacao Laravel base com uma pagina inicial em `resources/views/welcome.blade.php`.
- Workflow em `.github/workflows/deploy.yml`.
- Script pos-deploy em `deploy/after-sync.sh`.
- Script de preparacao do EC2 em `deploy/ec2-setup.sh`.
- Configuracao Nginx exemplo em `deploy/nginx-hdcevents.conf`.

## Como enviar para o GitHub

Crie um repositorio chamado `hdcevents` no GitHub. A pasta local ja foi inicializada como repositorio Git na branch `main`, entao rode:

```bash
cd hdcevents
git add .
git commit -m "Configura projeto Laravel hdcevents"
git remote add origin git@github.com:SEU_USUARIO/hdcevents.git
git push -u origin main
```

## Secrets do GitHub Actions

No repositorio, acesse Settings > Secrets and variables > Actions > New repository secret.

Crie estes secrets:

- `EC2_HOST`: IP publico ou DNS da instancia EC2.
- `EC2_USER`: usuario SSH da instancia, normalmente `ubuntu` quando a AMI for Ubuntu.
- `EC2_SSH_KEY`: conteudo inteiro da chave `.pem` usada para acessar a instancia.

## Preparacao unica no EC2

Conecte na instancia e rode os comandos do arquivo `deploy/ec2-setup.sh` uma vez antes do primeiro deploy.

Depois configure o servidor web para apontar para:

```text
/var/www/hdcevents/public
```

Se usar Nginx, o arquivo `deploy/nginx-hdcevents.conf` ja esta pronto como modelo.

## Demonstracao do Action funcionando

Depois do primeiro push, altere o titulo em:

```text
resources/views/welcome.blade.php
```

Faca commit e push. Em seguida, abra a aba Actions no GitHub e mostre o workflow `Deploy Laravel no EC2` finalizado com sucesso.
