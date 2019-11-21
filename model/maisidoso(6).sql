-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Nov-2019 às 18:53
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `maisidoso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividadefisica`
--

CREATE TABLE `atividadefisica` (
  `idatividadefisica` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `atividade_atividadefisica` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `duracao_atividadefisica` time NOT NULL,
  `data_atividadefisica` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartilha`
--

CREATE TABLE `cartilha` (
  `idcartilha` int(11) NOT NULL,
  `titulo_cartilha` text COLLATE latin1_general_ci NOT NULL,
  `fatores_cartilha` text COLLATE latin1_general_ci NOT NULL,
  `sintomas_cartilha` text COLLATE latin1_general_ci NOT NULL,
  `prevencao_cartilha` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `cartilha`
--

INSERT INTO `cartilha` (`idcartilha`, `titulo_cartilha`, `fatores_cartilha`, `sintomas_cartilha`, `prevencao_cartilha`) VALUES
(1, 'Alzheimer', ' para a maioria das pessoas, a doença de alzheimer é causada por uma combinação de fatores genéticos, de estilo de vida e ambientais que afetam o cérebro ao longo do tempo.', '\nrepetir afirmações e perguntas repetidamente, sem perceber que elas já fizeram a pergunta antes\nesquecer conversas, compromissos ou eventos\nperca-se em lugares familiares\neventualmente, esqueça os nomes dos membros da família e objetos do cotidiano\ntenha dificuldade em encontrar as palavras certas para identificar objetos, expressar pensamentos ou participar de conversas\ndepressão\napatia\nretraimento social\nmudanças de humor\ndesconfiança nos outros\nirritabilidade e agressividade\nmudanças nos hábitos de sono\nhábito de vagar\nperda de inibições\ndelírios, como acreditar que algo foi roubado.\n', '\nincurável, o alzheimer ainda não possui uma forma de prevenção. os médicos acreditam que manter a cabeça ativa e uma boa vida social permite, pelo menos, retardar a manifestação da doença. entre as atividades recomendadas para estimular a memória, estão: leitura constante, exercícios de aritmética, jogos inteligentes e participação em atividades de grupo.\n'),
(2, 'Hipertensão', '\n \nHistórico familiar: filhos de pais hipertensos têm um risco 30% maior de ter pressão alta\nIdade: a partir dos 60 anos de idade, as artérias perdem a flexibilidade\nEtnia: a doença é mais prevalente na população negra e asiática\nobesidade\n Poluição\n Estresse\nSono irregular\nMenopausa: a queda dos hormônios femininos danifica as artérias\nExcesso de bebida alcoólica\n– Tabagismo\n– Alto consumo de sal\n– Sedentarismo\n– Diabetes\n– Doenças renais\n– Apneia do sono\n– Hipertireoidismo\n\n\n', 'dor de cabeça\nfalta de ar\nvisão borrada\nzumbido no ouvido \ntontura e dores no peito\n', '\n\nUm estilo de vida saudável influencia muito aqui. Dar um basta no sedentarismo, especialmente se valendo de atividades aeróbicas, como correr e nadar, induz a liberação óxido nítrico, substância vasodilatadora. Com as artérias relaxadas, a tendência é a pressão se manter mais baixa\n\nA alimentação é tão importante na prevenção da pressão alta que há uma dieta específica para esse fim (DASH).\n\nA alimentação se baseia em generosas doses de vegetais, frutas, legumes e grãos integrais no cardápio como forma de combater a elevação da pressão\n'),
(3, 'Diabetes', '\nObesidade (inclusive a obesidade infantil);\nHereditariedade;\nFalta de atividade física regular;\nHipertensão;\nNíveis altos de colesterol e triglicérides;\nMedicamentos, como os à base de cortisona;\nIdade acima dos 40 anos (para o diabetes tipo 2);\nEstresse emocional.\n', '\n\nPoliúria – a pessoa urina demais e, como isso a desidrata, sente muita sede (polidpsia);\nAumento do apetite;\nAlterações visuais;\nImpotência sexual;\nInfecções fúngicas na pele e nas unhas;\nFeridas, especialmente nos membros inferiores, que demoram a cicatrizar;\nNeuropatias diabéticas provocada pelo comprometimento das terminações nervosas;\nDistúrbios cardíacos e renais.\n', 'Comer diariamente verduras, legumes e, pelo menos, três porções de frutas.\r\nReduzir o consumo de sal, açúcar e gorduras.\r\nParar de fumar.\r\nPraticar exercícios físicos regularmente, (pelo menos 30 minutos todos .os dias).\r\nManter o peso controlado\r\n'),
(4, 'Parkinson', '\n\nAs células nervosas usam uma substância química do cérebro chamada dopamina para ajudar a controlar os movimentos musculares. O Parkinson ocorre quando as células nervosas do cérebro que produzem dopamina são destruídas lenta e progressivamente. Sem a dopamina, as células nervosas dessa parte do cérebro não podem enviar mensagens corretamente. Isso leva à perda da função muscular. O dano piora com o tempo.\nA causa exata do desgaste destas células do cérebro é desconhecida, mas os médicos acreditam que uma mistura de fatores possa estar envolvida:\nGenética: mutações genéticas específicas podem estar envolvidas nas causas do Parkinson, mas estes casos são raros, acontecem geralmente com membros da família afetados pela doença de Parkinson. No entanto, algumas mutações genéticas parecem aumentar o risco de doença\nMeio ambiente: a exposição a determinadas toxinas ou fatores ambientais podem aumentar o risco de doença de Parkinson no futuro, mas o risco é relativamente pequeno.\n\n\n\n', '\r\nGeralmente, o mal de Parkinson começa com um tremor na mão. Outros sintomas são movimento lento, rigidez e perda de equilíbrio\r\n.\r\nTremor: em repouso ou mãos\r\nNos músculos: instabilidade, rigidez dos membros, anormalidade ao caminhar, contrações musculares rítmicas, dificuldade com movimentos corporais, dificuldade para caminhar, movimento corporal lento, movimentos involuntários, músculos rígidos, rigidez muscular ou andar arrastado lento\r\nNa cognição: amnésia, confusão durante a noite, demência ou dificuldade em pensar e compreender\r\nNo sono: despertar precoce, pesadelos ou sonolência diurna\r\nNo corpo: fadiga, falta de equilíbrio ou tontura\r\nNa fala: dificuldade de fala, espasmos na laringe ou fala mansa\r\nNo humor: ansiedade ou apatia\r\nNo nariz: perda de olfato ou sentido de olfato distorcido\r\nNo trato urinário: gotejamento de urina ou incontinência urinária\r\nTambém é comum: bradicinesia, baba, constipação, contorção involuntária, depressão, dificuldade em engolir, escrita à mão pequena, expressão facial reduzida, medo de cair, perda de peso, perda de sensibilidade de contraste, queda, seborreia ou tremedeira\r\n\r\n\r\n\r\n', 'O tratamento é feito por meio do uso de medicamentos para aumentar a dopamina.\r\n\r\nMedicamentos\r\nPromotor da dopamina\r\nEstimula os receptores de dopamina no cérebro.\r\n\r\nAntidepressivo\r\nPrevine ou alivia a depressão e regula o humor.\r\n\r\nMedicamentos que melhoram a cognição\r\nMelhora as funções mentais, reduz a pressão arterial e pode equilibrar o humor.\r\n'),
(5, 'Pneumonia', '\r\npneumonias são provocadas pela penetração de um agente infeccioso ou irritante (bactérias, vírus, fungos e por reações alérgicas) no espaço alveolar, onde ocorre a troca gasosa. Esse local deve estar sempre muito limpo, livre de substâncias que possam impedir o contato do ar com o sangue.\r\n', 'Os sintomas incluem tosse com catarro ou pus, febre, calafrios e dificuldade respiratória.\r\nAs pessoas podem ter:\r\nDores locais: costas\r\nTipos de dor: aguda no peito\r\nTosse: com catarro ou seca\r\nNo corpo: calafrios, fadiga, febre, mal-estar, pele fria e úmida ou suor\r\nNo sistema respiratório: falta de ar ou respiração rápida\r\nTambém é comum: ritmo cardíaco acelerado\r\n', 'O tratamento é feito por meio do uso de antibióticos\r\nOs antibióticos podem tratar muitos tipos de pneumonia e alguns podem até ser evitados com vacinas.\r\nMedicamentos\r\nAntibiótico\r\nMata bactérias ou interrompe o desenvolvimento delas.\r\nPenicilina\r\nMata bactérias específicas ou interrompe o desenvolvimento delas.\r\nCuidados médicos\r\nOxigenoterapia\r\nFornecimento de oxigênio extra para os pulmões de pessoas com problemas respiratórios.\r\n'),
(6, 'Bronquite', 'Tabagismo\r\n\r\nAmbientes poluídos\r\n\r\nLocais fechados, que favorecem a contaminação por micróbios\r\n\r\nAr condicionado, que resseca as vias aéreas\r\n\r\nRefluxo\r\ngastroesofágico\r\n\r\nContato com pes\r\nsoas gripadas ou resfriadas\r\n\r\nContato com substâncias que despertam reações alérgicas\r\n', 'Falta de ar\r\n\r\nIrritação na garganta\r\n\r\nPigarro constante\r\n\r\nTosse com secreção\r\n\r\nChiado no peito\r\n\r\nDor no peito\r\n\r\nFebre\r\n', '\r\nComo o tabagismo é um dos principais responsáveis pela bronquite, seja ela aguda ou crônica, largar o cigarro de vez (ou evitar contato com a fumaceira) é condição indispensável para escapar do problema.\r\nLavar as mãos com frequência, por sua vez, diminui o risco de levar vírus e bactérias para as vias respiratórias. Para os alérgicos, além de manter distância das substâncias que servem de gatilho às complicações respiratórias, aconselha-se caprichar na hidratação nos meses mais secos. E isso pode ser feito com inalação e soro fisiológico.\r\nFicar longe de inseticidas, spray de cabelo e outros itens livra as vias aéreas de outros fatores irritantes. Quem trabalha em ambiente infestado de partículas nocivas, poeira, fumaça e gases não pode abrir mão da proteção de máscara de proteção.\r\nTomar a vacina contra gripe fortalece as defesas e, não por acaso, a medida é oferecida todo ano prioritariamente a quem já tem uma doença crônica nos pulmões.\r\n\r\n\r\n'),
(7, 'Trombose ', '\r\nuso de anticoncepcionais ou tratamento hormonal;\r\ntabagismo;\r\nficar sentado ou deitado muito tempo;\r\nhereditariedade;\r\ngravidez;\r\npresença de varizes;\r\nidade avançada;\r\npacientes com insuficiência cardíaca;\r\ntumores malignos;\r\nobesidade;\r\ndistúrbios de hipercoagulabilidade hereditários ou adquiridos;\r\nOs pacientes submetidos a cirurgias de joelho, quadril e trauma (como fraturas) são os principais grupos de risco. A trombose que pode ocorrer após uma cirurgia ortopédica é geralmente localizada nas pernas, provocando entupimento da veia, causando dor e inchaço.\r\n\r\n\r\n', '\r\ndor;\r\ncalor;\r\nvermelhidão;\r\nrigidez da musculatura na região em que se formou o trombo.\r\nUma dor diferente da dor da cirurgia\r\nVermelhidão ao longo da perna (que aparece de repente ou inchaço que está piorando)\r\nInchaço na perna (que apareceu de repente ou inchaço que está piorando)\r\nAumento da temperatura (calor) da perna que está doendo\r\nRespiração curta e rápida e palpitações, podendo acontecer algum desmaio\r\nTosse com sangue\r\nDor no peito ou nas costas (que não é comum)\r\n\r\n\r\n', '\r\nexercitar-se ou fazer pequenas caminhadas regularmente; controlar o peso; evitar o cigarro; movimentar as pernas durante longos períodos sentada; usar meias elásticas no caso de insuficiência venosa, sempre com orientação médica.\r\n'),
(8, 'AVC', '\r\nO AVC acontece quando o suprimento de sangue que vai para o cérebro é interrompido ou drasticamente reduzido, privando as cédulas de oxigênio e de nutrientes. Ou, então, quando um vaso sanguíneo se rompe, causando uma hemorragia cerebral. Entre as causas dessas ocorrências, estão a malformação arterial cerebral (aneurisma), hipertensão arterial, cardiopatia, tromboembolia (bloqueio da artéria pulmo Acidente vascular cerebral isquêmico - é causado pela obstrução ou redução brusca do fluxo sanguíneo em uma artéria do cérebro, o que causa a falta de circulação vascular na região. O acidente vascular isquêmico é responsável por 85% dos casos de acidente vascular cerebral.\r\n\r\nAcidente vascular cerebral hemorrágico - acontece quando um vaso se rompe espontaneamente e há extravasamento de sangue para o interior do cérebro. Este tipo de AVC está mais ligado a quadros de hipertensão arterial.nar).\r\n\r\n\r\n', '\r\nOs sintomas de acidente vascular cerebral incluem dificuldade para andar, falar e compreender, bem como paralisia ou dormência da face, do braço ou da perna.\r\nAs pessoas podem ter:\r\nNos músculos: dificuldade para caminhar, fraqueza de um lado do corpo, fraqueza muscular, incapacidade de coordenar movimentos musculares, instabilidade, músculos rígidos, paralisia com músculos fracos, problemas de coordenação, paralisia de um lado do corpo ou reflexos hiperativos\r\nNa visão: perda temporária da visão em um olho, súbita perda da visão, visão dupla ou visão embaçada\r\nNa fala: dificuldade de fala, fala arrastada ou perda da fala\r\nNo corpo: tontura ou vertigem\r\nSensorial: formigamento ou redução na sensação de tato\r\nNa cognição: confusão mental ou incapacidade de falar ou entender o próprio idioma\r\nNo rosto: dormência ou fraqueza muscular\r\nTambém é comum: afasia de wernicke, dificuldade em engolir, dor de cabeça, fraqueza de um membro ou movimento rápido involuntário dos olhos\r\n', '\r\nO tratamento precoce com medicamentos como tPA (anticoagulante) pode minimizar danos cerebrais. Outros tratamentos concentram-se em limitar complicações e prevenir mais acidentes vasculares cerebrais.\r\nMedicamentos\r\nAlteplase, Anticoagulante, Estatina, Anti-hipertensivo e Inibidor da ECA\r\nCuidados médicos\r\nMonitoramento cardíaco\r\nCirurgia\r\nEndarterectomia de carótida\r\nTratamentos\r\nFonoaudiologia, Reabilitação Neuropsicológica, Terapia ocupacional, Reabilitação após derrame e Fisioterapia\r\nPreventivo\r\nExercício físico e Cessação tabágica\r\n'),
(9, 'Infecção urinária', '\r\nAs infecções urinárias geralmente ocorrem quando as bactérias entram no trato urinário através da uretra e começam a se multiplicar na bexiga. Embora o sistema urinário tenha sido projetado para manter esses invasores microscópicos, essas defesas às vezes falham. Quando isso acontece, as bactérias podem se apoderar e se transformar em uma infecção completa no trato urinário.\r\n', '\r\nArdência forte ao urinar\r\nForte necessidade de urinar, mesmo tendo acabado de voltar do banheiro\r\nUrina escura\r\nUrina acompanhada de sangue\r\nUrina com cheiro muito forte\r\nDor pélvica\r\nDor no reto\r\nAumento da frequência de micções\r\nIncontinência urinária.\r\n', '\r\nBeba muito líquido, especialmente água\r\nLimpe-se após urinar para evitar que bactérias se acumulem no local e entrem no trato urinário\r\nUrine após relações sexuais para esvaziar a bexiga. Beba muita água para ajudar a diluir a urina também\r\nUse absorventes externos em vez de internos, pois alguns médicos acreditam que isso aumente a probabilidade de infecções. Troque de absorvente cada vez que for ao banheiro\r\nNão use ducha nem sprays ou pó para a higiene feminina. Como regra geral, não utilize nenhum produto que contenha perfumes na área genital\r\nEvite usar calças muito apertadas\r\nUse calcinha e meia calça de algodão e troque-as, pelo menos, uma vez por dia.\r\n'),
(10, 'Pressão alta\r\n', '\r\nAs causas da pressão alta estão relacionadas com fatores genéticos, excesso de peso e hábitos de vida pouco saudáveis, como uma alimentação rica em sal e gorduras e sedentarismo. Quando ela não é devidamente tratada, a pressão alta pode levar a sérias consequências como derrame cerebral, problemas no coração e nos rins, que podem mesmo levar à morte.\r\n', '\r\nEm geral, a pressão arterial elevada não tem sintomas. Ao longo do tempo, se não for tratada, poderá causar problemas de saúde, como doenças cardíacas e acidente vascular cerebral.\r\n', '\r\nAdotar uma dieta saudável com menos sal, praticar exercícios físicos regularmente e tomar medicamentos pode ajudar a baixar a pressão arterial.\r\nComo você pode se cuidar\r\nExercício físico, Gerenciamento de estresse, Cessação tabágica, Monitor domiciliar de pressão arterial e Dieta pobre em sal\r\nMedicamentos\r\nInibidor da ECA, Diurético, Betabloqueador, Anti-hipertensivo e Bloqueador de canal de cálcio\r\n'),
(11, 'Catarata', '\r\nA causa mais comum da catarata é o envelhecimento do cristalino que ocorre pela idade, denominada de catarata senil. Porém também poderá estar associada a alterações metabólicas que ocorrem em certas doenças sistêmicas, (ex. Diabetes Mellitus), oculares (ex. uveíte), tabagismo, alcoolismo, secundária ao uso de certos medicamentos (ex. corticoides) ou a trauma ocular (contuso, perfurante, por infravermelho, descarga elétrica, radiação ultravioleta, raios X, betaterapia ou queimaduras químicas graves).\r\n', '\r\nO principal sintoma é a visão embaçada, como se a pessoa estivesse olhando por um vidro opaco.\r\nAs pessoas podem ter:\r\nNa visão: enxergar halos ao redor das luzes, incapacidade de enxergar com pouca luz, perda de visão, perda parcial da visão, sensibilidade à luz, visão dupla ou visão embaçada\r\n', '\r\nQuando a catarata interfere nas atividades normais do indivíduo, o cristalino embaçado pode ser substituído por lentes artificiais transparentes. Este geralmente é um procedimento ambulatorial seguro.\r\nProcedimento médico\r\nLaser\r\nCirurgia\r\nFacoemulsificação e Cirurgia de catarata\r\n'),
(12, 'Osteoartrose ', '\r\nA artrose pode ser primária ou secundária.\r\nA artrose primária ocorre principalmente devido ao uso excessivo de uma articulação, mas também pelo envelhecimento natural do indivíduo. O uso repetitivo das articulações ao longo dos anos causa danos à cartilagem, que leva a dor nas articulações e inchaço. Com o passar dos anos, o fluído que existe entre as articulações (líquido sinovial) se degenera, bem como a cartilagem que recobre esse líquido, chamada de membrana sinovial\r\nJá a artrose secundária é uma consequência de doenças ou condições que a pessoa tenha. Problemas que podem levar a artrose secundária incluem obesidade, trauma repetido ou cirurgia das estruturas articulares, articulações anormais no nascimento (anomalias congênitas), gota, artrite reumatoide, diabetes e outros distúrbios hormonais.\r\n\r\n\r\n', '\r\nO sintoma mais comum da artrose é a dor nas articulações afetadas. A dor articular geralmente piora no final do dia\r\nInchaço, calor, rangidos e limitação dos movimentos nas articulações afetadas também são sintomas comuns\r\nRigidez articular também pode ocorrer após longos períodos de inatividade, por exemplo, quando o indivíduo permanece sentado em uma cadeira.\r\n\r\n\r\n', '\r\nA artrose primária não pode ser prevenida, uma vez que é reflexo da degeneração articular que acontece com o tempo. Já no caso da artrose secundária, medidas como controle adequados das doenças e perda de peso podem ajudar na prevenção.\r\n'),
(13, 'Osteoporose', '\r\n– Predisposição genética\r\n\r\n– Envelhecimento\r\n\r\n– Dieta pobre em cálcio\r\n\r\n– Sedentarismo\r\n\r\n– Abuso de álcool\r\n\r\n– Tabagismo\r\n\r\n– Menopausa\r\n\r\n– Uso abusivo de remédios à base de corticoides\r\n\r\n– Diabetes\r\n\r\n– Disfunções na tireoide\r\n', 'A osteoporose é silenciosa e não apresenta sintomas. Em geral, o problema só é detectado em estado avançado, com a deformação de ossos que provoca dor crônica ou quando aparece uma fratura.', '\r\nA ingestão de cálcio é imprescindível para a renovação óssea: o ideal é 1 000 miligramas por dia – o equivalente a quatro porções lácteas. Embora outros alimentos também tenham alto teor de cálcio, como como brócolis e folhas verde-escuras, o nutriente é mais abundante em leite e derivados.\r\n\r\nA vitamina D é importante nesse processo. Sem ela, a absorção do mineral fica prejudicada. A recomendação é de 400 e 600 miligramas diários dessa vitaminas. Como poucos alimentos são ricos no nutriente, o banho de sol é a solução – com 15 minutos diários, sem protetor, a vitamina D chega ao intestino e ajuda a incorporar o cálcio.\r\n\r\nExercícios físicos de impacto, que estimulam a formação de massa óssea, também são imprescindíveis. E fora que estimulam o ganho de massa e força muscular, um fator importante na prevenção das quedas.\r\n'),
(14, 'Infarto', '\r\nO infarto ocorre quando uma ou mais artérias que levam oxigênio ao coração (chamadas artérias coronárias) são obstruídas abruptamente por um coágulo de sangue formado em cima de uma placa de gordura (ateroma) existente na parede interna da artéria.\r\nA presença de placas de gordura no sangue é chamada de aterosclerose (placa de colesterol). O paciente que possui placas de aterosclerose com algum grau de obstrução na luz de uma artéria tem a chamada DAC – doença arterial coronariana. Conforme a placa de gordura (ateroma) cresce, ela leva à obstrução cada vez maior da coronária e pode levar ao sintoma de dor no peito aos esforços (angina). Em geral, uma pessoa tem sintoma de dor no peito aos esforços quando a obstrução é maior que 70%.\r\n', '\r\nVômitos\r\nSuor frio\r\nFraqueza Intensa\r\nPalpitações\r\nFalta de ar\r\nSensação de ansiedade\r\nFadiga\r\nSonolência\r\nDesmaio, tontura ou vertigem\r\n\r\n\r\n', '\r\nO meio mais eficaz é o controle dos fatores de risco, a partir da prática regular de exercícios físicos, da redução do nível de colesterol no sangue, do abandono do cigarro, e do monitoramento da pressão arterial e do diabetes mellitus. As dietas alimentares, o uso de remédios (apenas quando indicados pelo médico) e a prática esportiva são determinantes para evitar o entupimento das artérias.\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `idconsulta` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `tipo_consulta` int(11) NOT NULL,
  `local_consulta` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `horario_consulta` time NOT NULL,
  `medico_consulta` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doenca`
--

CREATE TABLE `doenca` (
  `iddoenca` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `nome_doenca` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tipo_doenca` int(11) NOT NULL,
  `sintomas_doenca` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `doenca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `lembrete`
--

CREATE TABLE `lembrete` (
  `idlembrete` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `titulo_lembrete` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `horario_lembrete` time NOT NULL,
  `data_lembrete` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamento`
--

CREATE TABLE `medicamento` (
  `idmedicamento` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `nome_medicamento` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `indicacao_medicamento` text COLLATE latin1_general_ci NOT NULL,
  `horario_medicamento` time NOT NULL,
  `dosagem_medicamento` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `restricaoalimentar`
--

CREATE TABLE `restricaoalimentar` (
  `idrestricaoAlimentar` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `alimento_restricaoAlimentar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `grupo_restricaoAlimentar` int(11) NOT NULL,
  `razao_restricaoAlimentar` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `email_usuario` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `senha_usuario` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nome_usuario` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sobrenome_usuario` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `genero_usuario` int(11) NOT NULL,
  `dataNascimento_usuario` date NOT NULL,
  `altura_usuario` double NOT NULL,
  `peso_usuario` double NOT NULL,
  `tipoSanguineo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `usuario`
--
--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atividadefisica`
--
ALTER TABLE `atividadefisica`
  ADD PRIMARY KEY (`idatividadefisica`),
  ADD KEY `atividadeFisica_FKIndex1` (`usuario_idusuario`),
  ADD KEY `IFK_Rel_04` (`usuario_idusuario`);

--
-- Índices para tabela `cartilha`
--
ALTER TABLE `cartilha`
  ADD PRIMARY KEY (`idcartilha`);

--
-- Índices para tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idconsulta`),
  ADD KEY `consulta_FKIndex1` (`usuario_idusuario`),
  ADD KEY `IFK_Rel_01` (`usuario_idusuario`);

--
-- Índices para tabela `doenca`
--
ALTER TABLE `doenca`
  ADD PRIMARY KEY (`iddoenca`),
  ADD KEY `doenca_FKIndex1` (`usuario_idusuario`),
  ADD KEY `IFK_Rel_05` (`usuario_idusuario`);

--
-- Índices para tabela `lembrete`
--
ALTER TABLE `lembrete`
  ADD PRIMARY KEY (`idlembrete`),
  ADD KEY `lembrete_FKIndex1` (`usuario_idusuario`),
  ADD KEY `IFK_Rel_03` (`usuario_idusuario`);

--
-- Índices para tabela `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`idmedicamento`),
  ADD KEY `medicamento_FKIndex1` (`usuario_idusuario`),
  ADD KEY `IFK_Rel_04` (`usuario_idusuario`);

--
-- Índices para tabela `restricaoalimentar`
--
ALTER TABLE `restricaoalimentar`
  ADD PRIMARY KEY (`idrestricaoAlimentar`),
  ADD KEY `restricaoAlimentar_FKIndex1` (`usuario_idusuario`),
  ADD KEY `IFK_Rel_02` (`usuario_idusuario`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atividadefisica`
--
ALTER TABLE `atividadefisica`
  MODIFY `idatividadefisica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `idconsulta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `doenca`
--
ALTER TABLE `doenca`
  MODIFY `iddoenca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `lembrete`
--
ALTER TABLE `lembrete`
  MODIFY `idlembrete` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `idmedicamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `restricaoalimentar`
--
ALTER TABLE `restricaoalimentar`
  MODIFY `idrestricaoAlimentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
