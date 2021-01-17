
## Grupa 7 Group project 2020 | Book4You 
## Jakub Sieczka, Mykola Ostapchuk, Rafał Siejka, Łukasz Kaluźniak, Ostap Fedorv


############################################################################
################											################
################			Project documentation			################
################											################
############################################################################

#### Overall project description
	Book4You to najlepsza internetowa wypożyczalnia multimediów online. PDFy, filmy, muzyka. Wiele różnych gatunków i tematów.

#### Motivation and goal
	Strona ma ułatwić dostęp do wiedzy i rozrywki nieograniczonej ilością egzemplarzy lub koniecznością odwiedzenia stacjonarnej placówki. Dzięki cyfrowej wersji, nie trzeba się martwić o jej zgubienie lub zniszczenie. Dodatkowo komfort użytkowania zawsze jest tak wysoki jakby egzemplarz był pierwszy raz używany. Dzięki klientowi, który jest dostępny na systemy W/L/M, możesz korzystać z wypożyczonych rzeczy w dowolnym miejscu i czasie.

#### Milestones, epics, tasks/stories, subtasks
	system kont (rejestracja, logowanie, obsługa konta), klient internetowy (wypożyczanie, ocenianie, komentowanie, polecanie), klient desktopowy ( - // - )


#### Hardware infrastructure / technologies
	Windows / Linux / Mac / Mobile (resposive) -> strona internetowa
	Windows / Linux / Mac -> apka desktopowa


#### Used environments
	GitHub
	Jira
	StarUML


############################################################################
################											################
################		   Milestones, Epics        		################
################											################
############################################################################

		***********************************
Milestone I 
	system kont

	Epics
		schemat budowy strony, role na stronie, poziomy dostępu, CMS prosty (?)
		logowanie 
		rejestracja
		odzysk hasła
		zmiana ustawień konta (zm hasła, loginu, nr tel, email...)
		baza danych użytkowników + przykładowe dane
		testy + bezpieczeństwo
		(ustawienia witryny ?)


		***********************************
Milestone II
	strona internetowa - diagramy stanów i sekwencji z uzyciem modelu mvc

	Epics
		wypozyczanie
		ranking, top10
		historia
		sprawdz opinie, dodaj opinie (o autorze, ksiazce, filmie)
		dodaj swoje dzieło - zgłoś do dodania, sprawdź autora
		zrecenzuj
		udostępnij
		określ czas czytania po ilości stron, ostanio dodane
		subskrypcje   
		wyszukiwanie - tagi, kategorie, autorzy, opinie, polecane, 


		***********************************
Milestone III
	strona internetowa - diagramy klas z uzyciem modelu mvc

	Epics
		Diagram klas Uzytkownika (bans, notifications, role, user, )
		
		Diagram klas Opinie (opinions, reviews)
		
		Diagram klas Logi (logs, log_types)
		
		Diagram klas Multimedia (multimedia, subs, whishlist, favourites, multimedia_type)


		***********************************
