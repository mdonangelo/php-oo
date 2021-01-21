# Notas de aula

## Quando usar classe abstrata ou interface?
- **Herança:** devemos fazer a pergunta do "x é y?". Ou seja, cliente é uma pessoa? Se sim, então podemos começar começar a pensar em herança e em classe abstrata.
- **Abstração:** a classe que estou criando tem requisitos suficientes para criar um objeto dela? Se sim, ela será uma classe normal. Se não, poderá ser abstrata.
    - Classes abstratas permitem que sejam reutilizados as propriedades e método
- **Interfaces:** Só permite que haja assinaturas de métodos e constantes.
    - Usamos interfaces para garantir que a classe tenha um determinado comportamento

## Encapsulamento:

- **Private:** apenas podemos acessar na mesma classe
- **Protected:** podemos acessar em classes que extendem
- **Public:** pode ser acessado de qualquer lugar

## Polimorfismo
Utilização de classes genéricas para representar classes mais concretas
Também podemos utilizar interfaces para polimorfismo. Isso faz com que quando precisemos trocar, não estaremos dependentes de uma outra classe (facilita a manutenção do código).

### Traits
Permitem reutilizar métodos sem ter que utilizar herança. Assim, podemos chamá-la de herança horizontal

## Métodos estáticos
utilizado quando criamos algo que está vinculado ao objeto e não à classe.