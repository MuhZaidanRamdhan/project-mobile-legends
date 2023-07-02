-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 02:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_moleapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `difficults`
--

CREATE TABLE `difficults` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` enum('easy','medium','hard') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `difficults`
--

INSERT INTO `difficults` (`id`, `level`, `created_at`, `updated_at`) VALUES
(1, 'easy', '2023-06-30 23:18:05', '2023-06-30 23:18:05'),
(2, 'medium', '2023-06-30 23:18:05', '2023-06-30 23:18:05'),
(3, 'hard', '2023-06-30 23:18:05', '2023-06-30 23:23:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorits`
--

CREATE TABLE `favorits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `hero_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `notes` text NOT NULL,
  `rating` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorits`
--

INSERT INTO `favorits` (`id`, `user_id`, `hero_id`, `date`, `notes`, `rating`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2023-10-20', 'I like when used skill 1 and it looks slippery when i wear it.', 9.00, '2023-06-30 23:18:05', '2023-07-01 01:03:14'),
(2, 3, 1, '2023-12-12', 'This hero so annoying for enemy.', 9.10, '2023-06-30 23:18:05', '2023-07-01 01:02:18'),
(6, 5, 3, '2023-07-02', 'This can bring me to glory.', 8.80, '2023-07-01 17:15:57', '2023-07-01 17:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `weapon` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `special_id` bigint(20) UNSIGNED NOT NULL,
  `difficult_id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `name`, `poster`, `weapon`, `role_id`, `special_id`, `difficult_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Vexana', '1688257218.webp', 'Duke Atticus\' Scepter', 2, 2, 2, 'Vexana was the majestic ruler of Necrokeep, the gentle mother of the undead, but also the only glimmer of light that penetrated the Mist, bringing hope to this cursed land shunned by both life and death.  Undying Hope Princess Vexana Gaius had never set foot out of Lumina City, nor did she have any desire to do so. The Moniyan capital was warm, opulent, and bursting with life. A ghastly fortress in the southern hinterlands was the last place she intended to spend the rest of her life in.  On the other hand, she knew she was bound to her father\'s will. Duke Atticus of Ridgeburg had offered the House of Gaius a union through marriage, and Lord Gaius deemed Vexana the most suitable match. And now, she had found herself alone in her carriage on a long ride south.', '2023-06-30 23:18:05', '2023-07-01 17:20:18'),
(2, 'Lancelot', '1688194090.webp', 'Sword', 1, 5, 2, 'As the eldest son of Duke Baroque, Lancelot was born rebellious. Dead set on resisting the political marriage arranged for him by his father, he traveled the country and led a licentious life instead. After being wounded at a drunken brawl in a tavern, Lancelot was rescued by Odette and finally came to realize what his heart truly yearned for. The prodigal son made a repentant return and thus began his adventure across the Land of Dawn.In the [southwest] of the Moniyan Empire [lays] Castle Gorge that had fallen into decline due to the depletion of its famed gold mines.  As the oldest noble in the Empire, House Baroque ruled over Castle Gorge. The eldest son of Duke Baroque—Lancelot was a handsome young man with [unmatched] sword skills. He\'d received an all-round good education but also inherited his father\'s snobbery and haughtiness.  House Baroque had been in decline for years, and the duke was relying on loans to keep up a [façade]. To revive his family, the duke came up with a brilliant plan—to choose a d', '2023-06-30 23:18:05', '2023-06-30 23:48:10'),
(3, 'Lesley', '1688198282.webp', 'Black Vulture', 3, 16, 2, 'Lesley grew up in the Vance household, where her father presided over the noble family\'s security. During an unexpected attack by a rival family, Lesley\'s father was killed. As the assailants approached the Vance household, Lesley took up her father\'s black long rifle and fulfilled her late father\'s mission. Tears rolled down Lesley\'s cheeks as she fired shot after shot, surprisingly, each one taking down an assassin. The final tear came as the final shot took down the last of the rival family\'s men.  Lesley was adopted by the Vance family, with the patriarch of the noble house even putting their sole heir, Harley under her tutelage. Harley, was a natural troublemaker, who used his talents in magic to unintentionally cause trouble for the Vance household. Only Lesley could keep Harley under control. Harley\'s troublemaking streak was the last part of warmth within Lesley\'s conscience.After hearing about how Harley had travelled to the dangerous Land of Dawn after defeating the Boss of Dark Magic, Lesley follow', '2023-06-30 23:18:05', '2023-07-01 00:58:02'),
(4, 'Hayabusa', '1688256658.jpg', 'Udumbara', 1, 23, 2, 'Hayabusa is the head of the Shadow Sect\'s second son. Since childhood, he grew up under his father\'s iron-handed rule, and while his ninjutsu could never rival that of his brother, he was a kind friend and family member to him. When Hayabusa learned that his brother had been harmed by Hanzo, he resolved to spend the rest of his days mastering ninjutsu, in order to hunt down and exact revenge upon him.In the north of the Cadia Riverlands there lies a thick forest within a canyon. All around is aesthetic beauty, yet with a harsh and dangerous air. Myriad waterfalls flow like lengths of white silk, the water resounding throughout the area as it\'s splashed high into the heavens. When the wind picks up, fog and cherry blossoms float in the air—this is the home of the ninja, the Scarlet Shadow', '2023-07-01 17:09:34', '2023-07-01 17:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_27_064310_create_roles_table', 1),
(6, '2023_06_28_121725_create_heroes_table', 1),
(7, '2023_06_29_053155_create_favorits_table', 1),
(8, '2023_07_01_050126_create_specials_table', 1),
(9, '2023_07_01_052140_create_difficults_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Assasin', 'An assassin is an agile hero that specializes in killing or disabling roaming targets picking them of as they try to replenish HP. Focused on infiltration, deception, and mobility, assassins are opportunistic hunters who find favorable moments within a fight before jumping into the fray. Regardless of the size of the enemy team, assassins specializes in positioning and artful killing. They strike when the time is right – no sooner, no later. Assassins are more suitable to be played by experienced players as they have low HP and high burst damage. They are ideal for taking out opponents easily, but are easier to be killed due to bad positioning and wrong timing.', '2023-06-30 23:18:05', '2023-06-30 23:49:07'),
(2, 'Mage', 'A magician (abbreviated as mage) is a hero with a longer range, ability-based area of effect damage, and crowd control that they may utilize to strike from a distance. Mages primarily focus on magic skills that deals magic damage, usually burst damage, and as a consequence, they spend a lot of gold on equipment that allows them to do more damage and have shorter skill cooldowns.  Though mages typically focus on killing prime targets in combat, they can also use their innate crowd control and utility to manipulate opponents, protecting their team from them or setting them up for a takedown, and in the right circumstances, can damage and control multiple enemies at the same time. Regardless of their might, mages are fundamentally frail and succumb fast to direct attacks.', '2023-06-30 23:18:05', '2023-06-30 23:49:32'),
(3, 'Marksman', 'Marksman are ranged heroes whose power is almost entirely based on their basic attacks: by using their reach to land massive continuous damage from a distance, marksmens are capable of taking down even the most difficult opponents when positioned behind the safety of their team, and perform better at securing objectives such as the Lord and turrets', '2023-06-30 23:18:05', '2023-06-30 23:49:58'),
(4, 'Fighter', 'Fighters are close range combatants that possess a mix of offensive and defensive capabilities. A fighter\'s damage will add up over time to make it a major threat. Each fighter has a unique blend of mobility, damage, disruption and durability. Fighter is an intermediate melee heroes, between durability or damage, hence make fighter serve as multi purpose combatant, such as Semi Tank, Crowd Controller, or Burst Damage Dealer.', '2023-06-30 23:18:05', '2023-06-30 23:50:30'),
(5, 'Tank', 'Tanks heroes are the most durable among all in mobile legends. These front-line giants help in attacking enemies. They\'re usually found leading the charge, choosing the right times and situations to initiate aggression. Many tanks can also protect their more fragile teammates by stunning or pushing around dangerous foes and limiting their damage potential. In mobile legends, most classes of heroes are really versatile in terms of abilities and with the item crafting variations a \"tank\" can be played as a DPS if you choose the right equipment. Usually, tanks are laning on the bottom tower. Tank has high defense and hit point, but low damage. When used properly, a tank could be the strongest hero in the game.', '2023-06-30 23:18:05', '2023-06-30 23:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

CREATE TABLE `specials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specials`
--

INSERT INTO `specials` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Poke', 'Has a low cooldown ability that deals damage or inflicts disables from a long distance.', '2023-06-30 23:18:05', '2023-06-30 23:55:50'),
(4, 'Push', 'Can quickly destroy towers at all points of the game.', '2023-06-30 23:35:10', '2023-06-30 23:35:10'),
(5, 'Damage', 'Can consistently deal high damage at any points of the game.', '2023-06-30 23:35:34', '2023-06-30 23:47:37'),
(6, 'Poke', 'Has a low cooldown ability that deals damage or inflicts disables from a long distance.', '2023-06-30 23:36:11', '2023-06-30 23:36:11'),
(7, 'Initiator', 'Good at starting teamfights and can start important comebacks.', '2023-06-30 23:36:33', '2023-06-30 23:36:33'),
(8, 'Magic damage', 'Deals high magic damage at any points of the game.', '2023-06-30 23:36:58', '2023-06-30 23:36:58'),
(9, 'Mixed damage', 'Capable of inflicting both physical and magical damage towards the enemy.', '2023-06-30 23:37:18', '2023-06-30 23:37:18'),
(10, 'Guard', 'Has the ability to save allies from certain death.', '2023-06-30 23:37:43', '2023-06-30 23:37:43'),
(11, 'Chase', 'Has the ability to chase enemies quite fast.', '2023-06-30 23:38:03', '2023-06-30 23:38:03'),
(12, 'Control', 'Has a guaranteed disable on one or multiple abilities.', '2023-06-30 23:38:22', '2023-06-30 23:38:22'),
(13, 'Support', 'Can focus less on accumulating gold and more on securing an advantage for the team.', '2023-06-30 23:38:40', '2023-06-30 23:38:40'),
(14, 'Regen', 'Has the ability to regenerate lost HP during laning phases or clashes.', '2023-06-30 23:39:10', '2023-06-30 23:39:10'),
(15, 'Crowd control', 'Capable of controlling multiple enemies at once.', '2023-06-30 23:39:38', '2023-06-30 23:39:38'),
(16, 'Finisher', 'Capable of chasing enemies and shutting them down.', '2023-06-30 23:39:55', '2023-06-30 23:39:55'),
(23, 'Burst', 'Quickly deals high damage with low cooldowns.', '2023-07-01 06:28:39', '2023-07-01 06:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$wtF2X0bUV0v.cZRwLb8ETuQADaF3CAwv59RuSF2HBghtLsWQbD6hq', 'admin', NULL, '2023-06-30 23:18:05', '2023-06-30 23:18:05'),
(2, 'Muh Zaidan Ramdhan', 'muhammadzaidanramdhan509@gmail.com', NULL, '$2y$10$yNWvCjdmg3MudQ23edzhpuSf2PwceGkUN5BXZWWVKFNNfS.muAOg6', 'user', NULL, '2023-06-30 23:18:05', '2023-06-30 23:18:05'),
(3, 'Dinda Maulidia', 'dindamaulidia@gmail.com', NULL, '$2y$10$mYWzmz4RNr9x2X9hxN9u1.lft7acNExGfWEhd.9N5i6sDCdMrtoTu', 'user', NULL, '2023-06-30 23:18:05', '2023-06-30 23:18:05'),
(5, 'Ragil', 'agilalmunawir@gmail.com', NULL, '$2y$10$dfGljNegUO/MTEV8DumYMOm.RXE.7AEl2L0u2STAGa5enwz1xj2Kq', 'user', NULL, '2023-07-01 04:53:01', '2023-07-01 04:53:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `difficults`
--
ALTER TABLE `difficults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorits`
--
ALTER TABLE `favorits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specials`
--
ALTER TABLE `specials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `difficults`
--
ALTER TABLE `difficults`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorits`
--
ALTER TABLE `favorits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `specials`
--
ALTER TABLE `specials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
