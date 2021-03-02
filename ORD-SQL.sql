/*usuarios*/
CREATE TABLE `cursos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` text NOT NULL,
  `subcategoria` text NOT NULL,
  `detalhes` text NOT NULL,
  `descricao` text NOT NULL,
  `preco_total` text NOT NULL,
  `preco_parcelas` text NOT NULL,
  `cod_curso` text NOT NULL,
  `img` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*usuario*/

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
  PRIMARY KEY (`id_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*noticias*/
CREATE TABLE `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `subtitulo` varchar(200) NOT NULL,
  `referencias` varchar(1000) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `texto` varchar(10000) NOT NULL,
  `img` varchar(202) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB AUTO_INCREMENT=65657 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*depoimento*/
CREATE TABLE `depoimento` (
  `id_depoimento` int(11) NOT NULL AUTO_INCREMENT,
  `autor` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `subtitulo` varchar(200) NOT NULL,
  `texto` varchar(10000) NOT NULL,
  `img_autor` varchar(202) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
  PRIMARY KEY (`id_depoimento`)
) ENGINE=InnoDB AUTO_INCREMENT=65657 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*solucoes*/
CREATE TABLE `solucoes` (
  `id_solucoes` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `subtitulo` varchar(200) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `texto` varchar(10000) NOT NULL,
  `img` varchar(202) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
  PRIMARY KEY (`id_solucoes`)
) ENGINE=InnoDB AUTO_INCREMENT=65657 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*solicitacao*/
CREATE TABLE `solicitacao` (
  `id_solicitacoes` int(11) NOT NULL AUTO_INCREMENT,
  `id_projeto` varchar(255) DEFAULT NULL,
  `nome` varchar(500) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `desejo` varchar(1000) NOT NULL,
  `cep` varchar(202) NOT NULL,
  `endereco` varchar(1000) NOT NULL,
  `cidade` varchar(202) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
  PRIMARY KEY (`id_solicitacoes`)
) ENGINE=InnoDB AUTO_INCREMENT=65657 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*imagens(galeria) projetos*/
CREATE TABLE `projetos` (
  `id_projeto` int(11) NOT NULL AUTO_INCREMENT,
  `id_img` varchar(700) NOT NULL,
  `titulo` varchar(300) DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL,
  `subTitulo` varchar(300) DEFAULT NULL,
  `descricao` varchar(10000) DEFAULT NULL,
  `categoria` varchar(300) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
  PRIMARY KEY (`id_projeto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


/*historico(pesquisa)*/
CREATE TABLE `historico` (
  `id_historico` int(11) NOT NULL AUTO_INCREMENT,
  `pesquisa` int(11) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `time_final` timestamp NULL DEFAULT CURRENT_TIMESTAMP
  PRIMARY KEY (`id_historico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


/*imagens(galeria)*/
CREATE TABLE `img` (
  `id_img` int(11) NOT NULL AUTO_INCREMENT,
  `imgs` int(11) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
  PRIMARY KEY (`id_img`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*video*/
CREATE TABLE `video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `video` varchar(700) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*categoria*/
CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*migrations*/
-- CREATE TABLE `migrations` (
--   `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
--   `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `batch` int(11) NOT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*falied_jobs*/
-- CREATE TABLE `failed_jobs` (
--   `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
--   `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
--   `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
--   `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
--   `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
--   `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*password_resert*/
-- CREATE TABLE `password_resets` (
--   `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `created_at` timestamp NULL DEFAULT NULL,
--   KEY `password_resets_email_index` (`email`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;