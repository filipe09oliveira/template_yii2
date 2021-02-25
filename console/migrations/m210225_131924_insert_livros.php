<?php

use yii\db\Migration;

/**
 * Class m210225_131924_insert_livros
 */
class m210225_131924_insert_livros extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert("{{%book}}", ['nome', 'resumo', 'autor', 'edicao', 'status', 'created_at', 'updated_at'],
            [
                ["A revolução dos bichos", 'Verdadeiro clássico moderno, concebido por um dos mais influentes escritores do século XX, A revolução dos bichos é uma fábula sobre o poder. Narra a insurreição dos animais de uma granja contra seus donos. Progressivamente, porém, a revolução degenera numa tirania ainda mais opressiva que a dos humanos.
Escrita em plena Segunda Guerra Mundial e publicada em 1945 depois de ter sido rejeitada por várias editoras, essa pequena narrativa causou desconforto ao satirizar ferozmente a ditadura stalinista numa época em que os soviéticos ainda eram aliados do Ocidente na luta contra o eixo nazifascista. De fato, são claras as referências: o despótico Napoleão seria Stálin, o banido Bola-de-Neve seria Trotsky, e os eventos políticos - expurgos, instituição de um estado policial, deturpação tendenciosa da História - mimetizam os que estavam em curso na União Soviética. Com o acirramento da Guerra Fria, as mesmas razões que causaram constrangimento na época de sua publicação levaram A revolução dos bichos a ser amplamente usada pelo Ocidente nas décadas seguintes como arma ideológica contra o comunismo. O próprio Orwell, adepto do socialismo e inimigo de qualquer forma de manipulação política, sentiu-se incomodado com a utilização de sua fábula como panfleto. Depois das profundas transformações políticas que mudaram a fisionomia do planeta nas últimas décadas, a pequena obra-prima de Orwell pode ser vista sem o viés ideológico reducionista. Mais de sessenta anos depois de escrita, ela mantém o viço e o brilho de uma alegoria perene sobre as fraquezas humanas que levam à corrosão dos grandes projetos de revolução política. É irônico que o escritor, para fazer esse retrato cruel da humanidade, tenha recorrido aos animais como personagens. De certo modo, a inteligência política que humaniza seus bichos é a mesma que animaliza os homens. Escrito com perfeito domínio da narrativa, atenção às minúcias e extraordinária capacidade de criação de personagens e situações, A revolução dos bichos combina de maneira feliz duas ricas tradições literárias: a das fábulas morais, que remontam a Esopo, e a da sátira política, que teve talvez em Jonathan Swift seu representante máximo. "A melhor sátira já escrita sobre a face negra da história moderna." Malcolm Bradbury "Um livro para todos os tipos de leitor, seu brilho ainda intacto depois de sessenta anos." Ruth Rendell', ' George Orwell', 'Edição padrão, 10 janeiro 2007', 1, time(), time()],
                ["Pai Rico, Pai Pobre", 'Celebrando 20 anos como o livro n° 1 em finanças pessoais. A escola prepara as crianças para o mundo real? Essa é a primeira pergunta com a qual o leitor se depara neste livro. O recado é ousado e direto: boa formação e notas altas não bastam para assegurar o sucesso de alguém. O mundo mudou; a maioria dos jovens tem cartão de crédito, antes mesmo de concluir os estudos, e nunca teve aula sobre dinheiro, investimentos, juros etc. Ou seja, eles vão para a escola, mas continuam financeiramente improficientes, despreparados para enfrentar um mundo que valoriza mais as despesas do que a poupança. Para o autor, o conselho mais perigoso que se pode dar a um jovem nos dias de hoje é: “Vá para a escola, tire notas altas e depoisprocure um trabalho seguro.” O fato é que agora as regras são outras, e não existe mais emprego garantido para ninguém. Pai Rico, Pai Pobre demonstra que a questão não é ser empregado ou empregador, mas ter o controle do próprio destino ou delegá-lo a alguém. É essa a tese de Robert Kiyosaki neste livro substancial e visionário. Para ele, a formação proporcionada pelo sistema educacional não prepara os jovens para o mundo que encontrarão depois de formados. E como os pais podem ensinar aos filhos o que a escola relega? Essa é outra das muitas perguntas que o leitor encontra em Pai Rico, Pai Pobre. Nesse sentido, a proposta do autor é facilitar a tarefa dos pais. Quem entende de contabilidade deve esquecer seus conhecimentos acadêmicos, pois muitas das teorias expostas por Robert Kiyosaki contrariam os princípios contábeis comumente aceitos, e apresentam uma valiosa e moderna percepção do modo como se realizam os investimentos. A sociedade sofre mudanças radicais e, talvez, de proporções maiores do que as ocorridas em séculos passados. Não existe bola de cristal, mas algo é certo: a perspectiva global de transformações transcende nossa realidade imediata. Aconteça o que acontecer, só existem duas alternativas: segurança ou independência financeira. E o objetivo de Pai Rico, Pai Pobre é instruir o leitor e despertar sua inteligência financeira e a de seus filhos. “A principal razão pela qual as pessoas têm problemas financeiros é que passaram anos na escola, mas não aprenderam nada sobre dinheiro. O resultado é que elas aprendem a trabalhar por dinheiro… mas nunca a fazê-lo trabalhar para elas.', 'Kiyosaki, Robert T.', 'Edição de 20 Anos', 1, time(), time()],
                ["Arsène Lupin, O Ladrão De Casaca", 'Arsène Lupin, o ladrão de Casaca é uma coletânea de nove histórias do escritor francês Maurice Leblanc que constituem as primeiras aventuras de Arsène Lupin. O editor da revista francesa Je sais tout encomendou a Maurice uma novela policial, cujo herói fosse para França o que era para a Inglaterra o detetive Sherlock Holmes, de Sir Arthur Conan Doyle. Nasceu assim Arsène Lupin, personagem vivo, audacioso, impertinente, desafiando sem cessar o Inspetor Ganimard, arrastando corações atrás de si, zombando das posições conquistadas e ridicularizando os burgueses, socorrendo os fracos, Arsène Lupin é um Robin Hood da Belle Époque. Nessa edição especial em capa dura, o leitor encontrará a versão integral do texto, traduzido diretamente do francês. Acompanham pôster e marcador exclusivo.', 'Leblanc, Maurice', 'Edição numero 1', 1, time(), time()],
                ["Drácula", 'Bram Stoker é o criador genial de uma das mais famosas e horripilantes histórias de terror de todos os tempos. Drácula é uma história de vampiros e lobisomens, de criaturas que estando mortas permanecem vivas. Baseado no folclore da Transilvânia e num personagem real (o rei Vlad, o Empalador), redigiu um relato que tem assombrado gerações consecutivas de leitores, transformando-se num mito adaptado para o cinema, quadrinhos e TV, talvez o mais significativo destes últimos dois séculos. Na história, um jovem inglês é mantido em cativeiro, à espera de um destino terrível. Longe dele, sua noiva bela e jovem é atacada por uma doença misteriosa que parece extrair o sangue de suas veias. Por trás de tudo, a força sinistra que ameaça suas vidas: Conde Drácula, o vampiro vindo do fundo dos séculos.', 'Stoker, Bram', 'Edição de Luxo', 1, time(), time()],
                ["O Homem De Giz", 'Assassinato e sinais misteriosos em uma trama para fãs de Stranger Things e Stephen King Em 1986, Eddie e os amigos passam a maior parte dos dias andando de bicicleta pela pacata vizinhança em busca de aventuras. Os desenhos a giz são seu código secreto: homenzinhos rabiscados no asfalto; mensagens que só eles entendem. Mas um desenho misterioso leva o grupo de crianças até um corpo desmembrado e espalhado em um bosque. Depois disso, nada mais é como antes. Em 2016, Eddie se esforça para superar o passado, até que um dia ele e os amigos de infância recebem um mesmo aviso: o desenho de um homem de giz enforcado. Quando um dos amigos aparece morto, Eddie tem certeza de que precisa descobrir o que de fato aconteceu trinta anos atrás. Alternando habilidosamente entre presente e passado, O Homem de Giz traz o melhor do suspense: personagens maravilhosamente construídos, mistérios de prender o fôlego e reviravoltas que vão impressionar até os leitores mais escaldados.', 'Tudor, C. J.', 'Edição de Giz', 1, time(), time()],
                ["A Mulher na Janela", 'Primeiro lugar na lista do The New York Times. A mulher na janela é um daqueles raros livros realmente impossíveis de largar. – Stephen King Surpreendente. Arrebatador. Sensacional. Um suspense noir para o novo milênio, com personagens fascinantes, reviravoltas formidáveis, uma escrita primorosa e uma narradora com quem eu adoraria tomar uma garrafa de vinho. Talvez duas garrafas. – Gillian Flynn, autora de Garota exemplar Anna Fox mora sozinha na bela casa que um dia abrigou sua família feliz. Separada do marido e da filha e sofrendo de uma fobia que a mantém reclusa, ela passa os dias bebendo (muito) vinho, assistindo a filmes antigos, conversando com estranhos na internet e... espionando os vizinhos. Quando os Russells – pai, mãe e o filho adolescente – se mudam para a casa do outro lado do parque, Anna fica obcecada por aquela família perfeita. Até que certa noite, bisbilhotando através de sua câmera, ela vê na casa deles algo que a deixa aterrorizada e faz seu mundo – e seus segredos chocantes – começar a ruir. Mas será que o que testemunhou aconteceu mesmo? O que é realidade? O que é imaginação? Existe realmente alguém em perigo? E quem está no controle? Neste thriller diabolicamente viciante, ninguém – e nada – é o que parece. A mulher na janela é um suspense psicológico engenhoso e comovente que remete ao melhor de Hitchcock.', 'Finn, A. J.', 'Edição da Mulher', 1, time(), time()],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210225_131924_insert_livros cannot be reverted.\n";

        return false;
    }
}
