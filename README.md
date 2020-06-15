# Redimensiona e corta imagem

Esse código pega uma imagem (pela url), a largura e altura desejada, redimensiona, corta e exibe a imagem.

Ao baixar os arquivos no servidor local, poderá ver o funcionamento em (o link local vai depender do seu servidor):
http://localhost/redimensionar-e-cortar-imagem/abrirImagem.php?w=100&h=100&img=https://abrilviagemeturismo.files.wordpress.com/2016/10/hedinsfjordur-auroraborealis-iceland.jpg

Sendo w a largura da imagem, h a altura e img a url da imagem que vai ser resimensionada e cortada.

Esse link pode ser usado diretamente dentro da tag img para exibir a imagem em tamanho correto, exemplo: 

```html
<img src="http://localhost/redimensionar-e-cortar-imagem/abrirImagem.php?w=100&h=100&img=https://abrilviagemeturismo.files.wordpress.com/2016/10/hedinsfjordur-auroraborealis-iceland.jpg" />
```

Usando esse código para resimensionar e cortar, ao invés de ajustar pelo css, evita o carregamento de uma imagem pesada desnecessariamente.
