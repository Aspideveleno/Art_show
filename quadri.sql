-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2022 alle 20:35
-- Versione del server: 8.0.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_aspid`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `quadri`
--

DROP TABLE IF EXISTS `quadri`;
CREATE TABLE IF NOT EXISTS `quadri` (
  `id_quadro` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `anno` int NOT NULL,
  `autore` varchar(40) NOT NULL,
  `img` varchar(250) NOT NULL,
  `descrizione` varchar(8000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `like` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_quadro`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=5 ;

--
-- Dump dei dati per la tabella `quadri`
--

INSERT INTO `quadri` (`id_quadro`, `nome`, `anno`, `autore`, `img`, `descrizione`, `like`) VALUES
(1, 'Art Buff', 2014, 'Banksy', 'Art_buff.jpg', 'Art Buff è un graffito di Banksy creato a Folkestone nel 2014 come "parte della triennale di Folkestone".\r\nL''opera raffigura un''anziana che indossa le cuffie e fissa un piedistallo, su cui poggia una macchia di graffiti ricoperti. Il nome del pezzo è un gioco di parole in quanto buff è un termine del gergo dei graffitisti che indica il trattamento dei graffiti illegali.\r\nSegnalato il 13 ottobre 2014, Art Buff è stato vandalizzato con la verniciatura a spruzzo di un pene poggiato sul piedistallo.\r\nAll''inizio di novembre 2014 Robin Barton e Bankrobber London hanno organizzato la rimozione di Art Buff a seguito delle richieste dei proprietari del muro e hanno annunciato l''intenzione di metterlo all''asta per la ricerca contro il cancro. L''11 settembre 2015 un giudice britannico ha stabilito che il murale fosse di proprietà pubblica e doveva quindi essere restituito a Folkestone, poi effettivamente avvenuto nel 2020.', 4),
(2, 'Girl with Balloon', 2002, 'Banksy', 'Girl_with_Balloon.jpg', 'Girl with Balloon (o Balloon Girl o Girl and Balloon) è una serie di stencil graffiti, iniziata a Londra nel 2002 dallo street artist Banksy, che raffigura una ragazza con la mano tesa verso un palloncino rosso a forma di cuore portato via dal vento.\r\nBanksy ha utilizzato più volte varianti di questo design per supportare campagne sociali: nel 2005 sulla barriera della Cisgiordania, nel 2014 a supporto della crisi dei rifugiati siriani e anche durante le elezioni britanniche del 2017.\r\nNel 2018 una copia incorniciata dell''opera è stata triturata deliberatamente durante un''asta di Sotheby''s, tramite un dispositivo meccanico che Banksy aveva nascosto nel telaio. Banksy ha confermato di essere il responsabile della distruzione e ha dato alla nuova opera il nome Love is in the Bin. Sotheby''s ha affermato che si tratta della "prima opera creata durante un''asta dal vivo".', 2),
(3, 'Devolved parliament', 2009, 'Banksy', 'Devolved_parliament.jpg', 'Devolved Parliament è un dipinto dell''artista inglese Banksy, realizzato nel 2009.\r\nL''opera è stata realizzata nel 2009 ed esposta a Bristol. Originariamente il dipinto era stato intitolato dall''artista Question Time e, solo successivamente, con gli eventi legati alla brexit, ha assunto il nome attuale, oltre a subire alcune modifiche.\r\nIl quadro rappresenta il parlamento inglese, utilizzando uno stile accademico. Al posto dei deputati, però, vengono raffigurate delle scimmie. Il taglio dato dall''opera, pertanto, risulta essere satirico.\r\nOltre ad avere cambiato il titolo dell''opera, Banksy ha apportato anche alcuni cambiamenti. Nella versione esposta a ottobre 2019 rispetto a quella iniziale esposta nel 2009, ad esempio, mancano i candelabri posti sul soffitto rendendo la scena più buia. Secondo la casa d''asta Sotheby''s è sempre lo stesso dipinto che è stato rimaneggiato dall''artista.', 20),
(5, 'Kissing Coppers', 2004, 'Banksy', 'Kissing_Policemen.jpg', 'Quando Kissing Coppers (ovvero: Poliziotti che si baciano) comparve sul muro di un pub in una strada di Brighton, nel 2004, fece un certo scalpore. Con una pungente ironia, Banksy ritrae una coppia di poliziotti che si abbandonano ad un bacio appassionato. Le forze dell’ordine sono spesso schernite nelle opere di Banksy e in questo caso, da simbolo di repressione, si trasformano in un’icona anti-omofobia. Oggi, a Brighton, è possibile vedere solo una copia dell’opera originale, che fu venduta ad un privato dal proprietario del pub per una cifra da capogiro.', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
