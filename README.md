# Módulo POO | Aula 03
##### Repositório para Prática em Aula
-----
  
#### Tema Geral: Programação Orientada a Objetos (PHP)
#### Tema da Aula: Polimorfismo e Sobrecarga e Sobreposição de Métodos
  
  
# Revisão
**Nessa aula revisitaremos os conceitos básicos vistos na [Aula 01](http://github.com/Marcelo-Diament/tn15-poo-aula01) e na [Aula 02](http://github.com/Marcelo-Diament/tn15-poo-aula02), como:**

  - Criação de **Classe**
  - Definição de **Propriedades** e **Métodos** dentro de uma Classe
  - Instância de um **Objeto** a partir de uma classe
  - Acesso às **Propriedades** e **Métodos** a partir do Objeto
  - Uso da palavra chave **_$this_**
  - Os métodos mágicos **___construct_** e **___destruct_** (e o uso do **_unset()_**)
  - **Classe Abstrata**
  - **Interface**
  
  
# Novidades!

## Visibilidade
Trabalharemos com propriedades públicas (como já vimos), protegidas (acessíveis por classes relacionadas) e privadas (acessíveis somente através da própria classe). Confira a imagem a seguir para entender melhor como funciona:

![Visibilidade](https://raw.githubusercontent.com/Marcelo-Diament/tn15-poo-aula03-pronto/master/assets/img/visibilidade.png)

_Exemplo: Telefone. Temos o celular, que apenas nós mesmos usamos (**privado**). Temos (ou tínhamos) o telefone fixo - apenas quem está dentro de casa pode usar, portanto, é **protegido**. E, por fim, o telefone público, que como o próprio nome já diz, é **público**._

#### Vantagens
> Com a visibilidade podemos **controlar o nível de acesso** às propriedades e métodos, tornando nossas aplicações mais seguras.
  
  
## Polimorfismo e Sobrecarga e Sobreposição de Métodos

![Camaleão](https://textile.center/media/catalog/product/cache/3/image/650x/040ec09b1e35df139433887a97daa66f/6/3/63278-min.jpg)

Poli, do grego _polýs_, significa 'muito'. E morfo (também do grego _mórphos_) signigica 'forma'. O **Polimorfismo** permite justamente que as características sejam alteradas, adaptadas, o que significa que **o Polimorfismo nos permite declarar e definir métodos e propriedades que serão transformados/adaptados posteriormente** (da mesma maneira que vimos com as classes Abstratas na aula anterior). Lembrando que para instanciarmos um objeto que herde essas caracteríscias e ações de uma clase Abstrata, precisamos utilizar os métodos **_get_** e **_set_**. Podemos enxergar a classe Abstrata como um **molde para as classes que a estendem**. E a **sobrecarga** e **sobreposição** de métodos como aquilo que nos permite adaptar essas classes filhas, conferindo as **características específicas** a cada uma delas.

### Sobrecarga (ou Overload) de Métodos
Basicamente são variações de um mesmo método (então temos métodos homônimos - de mesmo nome - mas que são definidos de maneiras distintas - com tipos de dados diferentes, número de parâmetros recebidos desiguais...). Isso nos poupa de criarmos _n_ métodos para situações muito semelhantes em escopos iguais.
_Exemplo de uso: temos um mesmo método que pode receber tipos de parâmetros distintos. No caso declaramos um método para cada tipo de parâmetro, todos com o mesmo nome. O próprio sistema verificará qual deles é mais adequado para os inputs recebidos (parâmetros) e fará a escolha de acordo com a melhor performance._

### Sobreposição (ou Override) de Métodos
Ao contrário da Sobrecarga, onde temos _n_ métodos de mesmo nome para diferentes situações, na Sobreposição, os métodos herdados são reescritos (podemos pensar na evolução das espécies e nas mutações). E como trata-se de uma sobrescrita, devem possuir o mesmo nome, tipo de dado e quantidade de parâmetros. Mas, como são sobrescritos nas classes filhas, podem incluir propriedades e métodos extras dentro deles.
_Exemplo de uso: pense numa classe abstrata Carro. Em Carro definimos que esse carro tem aceleração. Então criamos duas classes filhas - CarroAutomatico e CarroManual. No caso, a classe CarroAutomatico pode manter seu método aceleracao() igual ao herdado. Já em CarroManual, podemos adicionar a troca de marchas ao método aceleracao()._

#### Vantagens
> Com a Sobrecarga e Sobreposição de Métodos, podemos nos poupar de (re)escrever inúmeras linhas de código. Então podemos, **ao mesmo tempo, reaproveitar e modificar métodos**, permirtindo o **Polimorfismo**. No final das contas, temos um código mais conciso e flexível ao mesmo tempo.
  
#### Sobrecarga x Sobreposição
Confira as principais diferenças entre os 2 conceitos:
  
| Sobrecarga | Sobreposição |
| ------ | ------ |
| **Adaptação** | **Mutação** |
| **Variação do estado do método** | **Variação do método em si** |
| **Abrangência de um método** | **'Extensibilidade' de um método** |
| **Opção de _n_ parâmetros de _n_ tipos** | **Mesmos parâmetros do mesmo tipo usado na classe pai** |


# Prática

## Teoria da Evolução de Darwin

![Polimorfismo](https://raw.githubusercontent.com/Marcelo-Diament/tn15-poo-aula03/master/assets/img/polimorfismo.png)

Replicaremos a Teoria da Evolução das Espécies, de Darwin, para aplicarmos o conceito de Polimorfismo. Não nos aprofundaremos tanto assim, pois a ideia desse módulo é que compreendam como funciona a Programação Orientada a Objetos, para que possamos prosseguir para o módulo de PDO (uma classe feita para realizarmos o CRUD em banco de dados como o MySQL, que veremos no próximo módulo) e para entendermos o funcionamento do Laravel (framework que veremos mais para o final do curso).
Mas vale a pena estudarem mais sobre o tema, criarem projetos próprios para treinarem, estudarem e se depararem com desafios, a fim de que cresçam como desenvolvedores, façam o melhor uso das ferramentas disponíveis para nós, programadores, e possam inclusive estudar novas linguagens e frameworks após a conclusão desse curso! ;)

É isso galera! Qualquer dúvida, nos procurem no Slack da turma! Boa aula!
