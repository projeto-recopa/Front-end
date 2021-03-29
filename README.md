# easy-app
<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#sobre-o-projeto">Sobre o projeto</a>
    </li>
    <li>
      <a href="#configuração">Configuração</a>
    </li>
    <li>
      <a href="#docker-support">Docker Support</a>
    </li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->
## Sobre o Projeto
Este projeto é a página front-end para o MVP da solução easy-typing-forms.


## Configuração

Como uma aplicação FrontEnd baseada no Vue.js podemos usar os comandos npm para instalar as dependências:

```
npm install
```

Para executar a aplicação em ambiente local

```
npm run serve
```

E para gerar uma versão para publicação.
```
npm run build
```

### Lints and fixes files
```
npm run lint
```

### Configuração de endpoints
A aplicação precisar acessar os endpoints do back-end expostos pela aplicaçã image-cloud-processor.
Para isso, antes de publicar a aplicação, deve ser alterada a varável **API_URL** no arquivo *src\common\config.js*
```
export const API_URL = "URL da aplicação Image Cloud Processor";
```

## Docker Support
Disponibilizamos um Dockerfile para configurar e gerar uma imagem de container para esta aplicação publicada num servidor NGINX.
Para gerar e publicar a imagem em um container registry, podemos executar os seguintes comandos:

```
docker build .
docker tag local-image:tagname [new-repo]:tagname
docker push [new-repo]:tagname
```
Substituindo [new-repo] pelo nome completo do repositório onde a imagem será registrada.


### Customize configuration
See [Configuration Reference](https://cli.vuejs.org/config/).
