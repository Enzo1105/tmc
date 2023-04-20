drop database if exists tmc;

create database tmc;

use tmc;

set default_storage_engine=InnoDb;

create table Animal (
	id int auto_increment       not null,
	nom varchar(10)             not null,
    idArtisan int               not null,
    PRIMARY KEY (id)
);

create table Artisan (
	id int auto_increment       not null,
	nom varchar(30)             not null,
	prenom varchar(30)          not null,
    adresse text                not null,
	telephone varchar(10)       not null,
	unique (nom, prenom),
	PRIMARY KEY (id)
);

create table Viande (
	id int auto_increment       not null,
	nom varchar (30)            not null,
	descriptionv text           not null,
	prix decimal(4,2)           not null,
	photo varchar(100)          not null,
	idAnimal int                not null,
	Foreign key (idAnimal) references Animal (id),
	PRIMARY KEY (id)
);

create table Commande (
	id int auto_increment       not null,
	prix decimal(3,2)           not null,
	poids decimal(2,1)          not null,
	quantite int                not null,
	dateCommande date           not null,
	idViande int                not null,
	idClient int                not null,
	Foreign key (idViande) references Viande (id),
	Foreign key (idClient) references Client (id),
	PRIMARY KEY (id)
);

create table Client (
	id int auto_increment       not null,
	login varchar (30)          not null,
	mdp varchar (30)            not null,
	prenom varchar (50)         not null,
	nom varchar (50)            not null,
    adresse varchar (255)       not null,
    telephone varchar (10)      not null,
    PRIMARY KEY (id)
);

delete from artisan;

insert into animal (id,nom,idArtisan) values
(1, 'boeuf', 101),
(2, 'porc', 102),
(3, 'veau', 103);

insert into artisan (id, nom, prenom, adresse, telephone) values
(101, 'Deblois', 'Benjamin', '22 rue de la Descente ABBEVILLE 80100', '0623791834'),
(102, 'Ruait', 'Gabriel', '4 rue du Fleuve CORBIE 80800', '0635718429'),
(103, 'Avare', 'Thierry', '98 rue Neuve MOREUIL 80110', '0728842377');

insert into client (id, login, mdp, nom, prenom, adresse, telephone) values
(01, 'serin', '14Kh_@4a!', 'SERIN', 'ENZO', '21 rue René Philippon FLESSELLES 80260', '0782268584');

insert into viande(id, nom, descriptionv, prix, photo, idAnimal) values
(11, 'Collier de bœuf', 'Le collier rend les plats mijotés, comme les daubes, savoureux et moelleux. Idéal pour les pots-au-feu ou utilisé en morceaux dans une carbonnade. Une cuisson lente de 2 à 3 heures est recommandée. La viande entrelardée du collier rend les plats mijotés, comme les daubes, savoureux et moelleux. Le collier peut être cuisiné seul ou avec d’autres morceaux à mijoter comme le gîte ou la basse-côte. Une seule règle, donner du temps à la cuisson et il révèlera tous ses atouts. Il faut prévoir environ 2 heures de cuisson en cocotte traditionnelle et 1 heure en autocuiseur.', '11.31€' , 'collierdeboeuf.jpg', 1),
(12, 'Bavette d''aloyau', 'La bavette d’aloyau est une viande goûteuse et fondante. Très facile à cuisiner, elle a une saveur délicatement persillée et se déguste seule ou accompagnée d’une sauce, de préférence à l’échalote. Elle a l’avantage d’être très simple à cuisiner : saisissez-la à la poêle ou au gril 1 minute de chaque côté pour caraméliser les sucs de surface de façon à laisser le maximum de jus à l''intérieur, ajoutez une pincée de sel et du poivre et nappez du jus de cuisson', '29.90€', 'bavettealoyau.jpg', 1),
(13, 'Côtes de bœuf', 'La côte de bœuf est issue du milieu de train de côtes de l''animal. Ce muscle situé entre la 5e et la 11e côte recouvre ses vertèbres dorsales. Il est surtout charnu sur sa face externe, la majeure partie de la viande de ce morceau se trouve donc entre la cage thoracique et la peau du bœuf. La côte de bœuf est une tranche très épaisse comprenant un des os de la côte et la viande qui le recouvre. La côte de boeuf se cuit environ 12 minutes par livre (500g) de viande pour être saignante. On ne sert en effet la côte de bœuf ni bleue, ni bien cuite. Il faut qu''elle soit chaude à coeur mais encore saignante. Si vous disposez d''une sonde, la température de cuisson idéale de la côte de boeuf à coeur est de 55°C.', '38.85', 'cotedeboeuf.jpg', 1),
(14, 'Entrecôte', 'L’entrecôte est tout simplement une côte de bœuf désossée. C’est une viande grasse, persillée et très tendre. Une entrecôte de bœuf de qualité se devine par la qualité de la carcasse dont elle est issue et par la répartition du gras dans ses fibres.  Afin d’éviter un durcissement de la viande par choc thermique, il convient de la sortir du réfrigérateur et de la faire reposer à température ambiante au moins 1h avant de la cuire. Pour une bonne tenue lors de la cuisson, découpez l’entrecôte en tranches épaisses d’environ 2cm. Quel que soit le mode de cuisson, il faut compter 5 à 10 minutes de cuisson, selon le degré de cuisson souhaité mais aussi l''épaisseur de l''entrecôte, depuis combien de temps vous l''avez sortie du réfrigérateur, etc. Vérifiez la cuisson en touchant la viande. Plus elle est ferme, plus elle est cuite.', '35.90', 'entrecote.jpg', 1),
(15, 'Filet de bœuf', 'Le filet de bœuf est un morceau de choix, à poêler ou à rôtir. Sa cuisson exige certaines précautions. Sa viande est particulièrement maigre, elle s’assèche et durcit  donc facilement si sa cuisson n’est pas maitrisée : chaleur trop vive ou temps de cuisson prolongé. Coupé en tranches épaisses, tournedos entouré d’une barde ou Chateaubriand, il doit être colorer à feu vif et des deux côtés dans une poêle avec un peu de matière grasse afin de saisir la surface et caraméliser les sucs pour former une croûte qui le protégera tout le long de sa cuisson à feu plus modéré : 2 à 4 minutes par face.', '56.90€', 'filetdeboeuf.jpg', 1),
(16, 'Rumsteak', 'Parmi les morceaux les plus maigres du bœuf, le rumsteck est idéal pour préparer des brochettes ou une fondue, des émincés, des tranches, des pavés mais aussi des rôtis. C''est poêlé ou grillé qu''il donne le meilleur de lui-même. Les pièces de rumsteck cuites à la poêle doivent toujours être mises en contact avec un corps gras très chaud. Il est important d’en saisir la surface, ce qui permet de caraméliser les sucs de façon à laisser le maximum de jus à l''intérieur de la viande. C’est servi saignant que le rumsteck décuple toutes ses saveurs. Le temps de cuisson dépend de l''épaisseur des morceaux et du goût de chacun. Il vous faudra à peine 1 minute pour saisir des émincés, de 1 à 3 minutes pour une tranche et de 2 à 5 minutes pour un pavé, en les retournant à mi-cuisson.', '29.90', 'rumsteak.jpg', 1),
(21, 'Filet de porc', 'Mariné, roulé, grillé, farci, légèrement sucré ou épicé, le filet de porc peut être apprêté de mille et une façons. Accessible et polyvalente, cette viande riche en protéines, en fer et en zinc est sans contredit l''une des grandes favorites des familles québécoises. Qu''il soit cuit dans la mijoteuse, sur le BBQ ou au four, le filet de porc reste une option économique et simple. Préchauffer le four, la grille au centre, à 200 oC (400 oF). Dans une grande poêle allant au four, à feu moyen-élevé, chauffer un peu d''huile. Dorer le filet 3 minutes de chaque côté. Cuire au four de 12 à 15 minutes (par livre), ou jusqu''à ce que la température interne atteigne 63 oC (145 oF), pour une cuisson rosée.', '16.40', 'filetdeporc.jpg', 2),
(22, 'Grillade de porc', 'La grillade de porc est une pièce de choix pour vos barbecues, mais savez-vous qu’elle sert aussi à réaliser de belles paupiettes de porc ? Particulièrement charnue, la grillade de porc est tendre et savoureuse. Sa chair persillée en fait un morceau très prisé. Sa chair légèrement grasse en fait un morceau d’une grande finesse, qui nécessite une cuisson délicate pour ne pas durcir la viande. Afin d’éviter que la grillade de porc ne se rétracte, vous devez la cisailler sur chaque face avant de la griller ou de la poêler. Pour les pièces peu épaisses, 5 minutes suffiront à faire cuire vos grillades de porc. Les morceaux plus épais auront besoin de plus de temps pour devenir bien tendres. Comptez environ 10 minutes pour les faire cuire.', '22.90', 'grilladedeporc.jpg', 2),
(23, 'Jarret de porc', 'Le jarret de porc est une viande à la chair tendre et goûteuse. Il est toujours recouvert d''une couenne épaisse qui parfume délicieusement les bons petits mijotés. Le jarret de porc peut être cuisiné de diverses manières. Poché dans un bouillon, braisé ou rôti, il fait le bonheur de nombreux gourmets. Très populaire dans toute l''Europe, c''est dans la choucroute et le petit salé aux lentilles qu''on aime le retrouver. Pour préserver le fondant de sa chair, pensez à le faire mijoter suffisament longtemps. Pour que votre viande reste bien tendre, il est conseillé de la cuire à la cocotte dans un bouillon pendant environ 2h. Placez ensuite votre jarret dans un plat allant au four où il finira de cuire à 240°C pendant 20 à 30 minutes.', '10.50', 'jarretdeporc.jpg', 2),
(24, 'Echine de porc', 'Très appréciée pour sa tendreté et son goût prononcé. Pour avoir une viande de qualité, choisissez toujours de l’échine rosée (voire rouge pâle) avec un grain serré et une graisse bien blanche. Rôtie, grillée, sautée, braisée : différents modes de cuisson peuvent ensuite sublimer l’échine de porc. Dans tous les cas, la cuisson doit être douce et lente pour préserver le côté moelleux et juteux de la viande. Elle peut être braisée ou rôtie mais quel que soit le mode de cuisson choisi, sa cuisson doit se faire à une température douce ( pas plus de 160°) et sur un temps de cuisson plutôt long (au moins 1h30 mn / kg).', '11.77€', 'echinedeporc.jpg', 2),
(25, 'Côtes filet de porc', 'Le filet est souvent vendu en côtes ou en carré, avec les os. Il fournit d''excellents rôtisdésossés, à cuire en cocotte de préférence, pour préserver son moelleux à la viande. On peut choisir entre le milieu et la pointe de filet. Pour une cuisson réussie, préférez une cuisson à la poêle sur un feu doux pendant un temps plutôt court (environ 15 minutes/200g).', '11.85€', 'cotesfiletdeporc.jpg', 2),
(26, 'Jambon de porc', 'Morceau le plus noble du porc, le jambon de porc se prête à de nombreuses préparations culinaires. Spécialité de charcuterie parmi les plus prisées des gourmands, le jambon se déguste cru ou cuit en toute occasion. Le jambon se caractérise par son goût unique et savoureux. Le jambon blanc désigne le jambon de porc cuit. Le plus simple est de le plonger dans un bouillon. Ajoutez-y un bouquet garni et des épices, légumes et autres aromates et condiments, et laissez cuire pendant plusieurs heures. Cette préparation est facile et vous obtiendrez une viande moelleuse et cuite à point.', '5.25€', 'jambondeporc.jpg', 2),
(31, 'Collier de veau', 'Le collier de veau est un muscle de l’encolure. Il se trouve entre la poitrine et la côte découverte, il est l’un des morceaux avant du veau. Très peu connu, il est malheureusement mésestimé car il nécessite une attention toute particulière à la cuisson : il doit, en effet, cuire doucement et longtemps. Il faut prévoir environ 1h30 de cuisson en cocotte traditionnelle et 45 minutes en autocuiseur. Vous pouvez le cuisiner la veille pour le réchauffer le lendemain, il n’en sera que meilleur.', '12.90€', 'collierdeveau.jpg', 3),
(32, 'Côtes découvertes de veau', 'Les côtes découvertes de veau sont découvertes à la levée de l’épaule. Ces côtes, moins larges que les précédentes, sont plus charnues que leurs voisines. Elles sont aussi pleines d''arômes car entrelardées et recouvertes d’un gras très fin. Comptez 2 à 5 minutes de cuisson par face à feu modéré, en prenant soin de les « nourrir » en les arrosant régulièrement avec le jus de cuisson lorsqu’elles sont préparées à la poêle. Elles se dégustent nature, juste salées et poivrées mais aussi accompagnées de leur jus de cuisson ou d’une petite sauce.', '29.90', 'cotesdecouvertesdeveau.jpg', 3),
(33, 'Côtes première de veau', 'Les côtes premières étant comme leur nom l''indique le morceau le plus noble parmi les appellations de côtes de veau. Ce sont les plus charnues, avec un manche bien droit et peu de graisse sur les bords. Elles font entre 2 et 3 cm d''épaisseur. Commencez par saisir les côtes à feu vif dans de la matière grasse très chaude pour caraméliser les sucs et emprisonner une partie du jus dans la viande. Comptez ensuite environ 2 à 5 min selon l''épaisseur des côtes de veau pour cuire chaque face en prenant soin de bien les arroser avec leur jus tout au long de la cuisson à la poêle.', '29.90', 'cotespremieresdeveau.jpg', 3),
(34, 'Grenadins de veau', 'Le grenadin de veau est considéré comme un morceau de veau raffiné. Il s’agit en effet d’une pièce taillée dans le filet. Ce morceau est très tendre et savoureux, parfait donc pour une cuisson poêlée ou grillée. Afin de préserver toutes ses qualités gustatives, cette pièce de veau doit être servie légèrement rosée. Faire chauffer la poêle et ajouter le beurre. Quand il chante, disposer les pavés de grenadin et les faire cuire chaque face 3 minutes en arrosant avec le beurre de cuisson.', '26.90€', 'grenadinsdeveau.jpg', 3),
(35, 'Jarret de veau', 'Le jarret de veau, partie basse des membres de l''animal est un morceau maigre, tendineux, gélatineux, comportant un os riche en moelle. Les jarrets avant sont plus petits que les jarrets arriére et moins charnus. Entier, le jarret de veau peut se cuisiner au four, comme un rôti mais plus longtemps car un morceau avec os demande une cuisson plus longue et surtout parce que sa viande, riche en collagène, demande à cuire longtemps pour le faire fondre, au moins deux heures selon le poids et à une température moins élevée (150° C – Th.6).', '26.30€', 'jarretdeveau.jpg', 3);