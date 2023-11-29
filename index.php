<?php
// test on https://onlinephp.io/
// based on https://legislatie.just.ro/Public/DetaliiDocument/189
// created by sebiboga && dianadascalu2

function createLoc($nume, $tip, $locuri = []) {
    $loc = new stdClass();
    $loc->nume = $nume;
    $loc->tip = $tip;

    // Set the loc property only if $locuri is defined and not an empty array
    if (!empty($locuri)) {
        $loc->loc = $locuri;
    }

    return $loc;
}


function createComuna($nume, $locuri = []) {
    $comuna = new stdClass();
    $comuna->nume = $nume;
    $comuna->loc = $locuri;
    return $comuna;
}

function createOras($nume, $locuri = []) {
    $oras = new stdClass();
    $oras->nume = $nume;
    $oras->loc = $locuri;
    return $oras;
}

function createMunicipiu($nume, $locuri = []) {
    $municipiu = new stdClass();
    $municipiu->nume = $nume;
    $municipiu->loc = $locuri;
    return $municipiu;
}

function createJudet($nume, $municipii = [], $orase = [], $comune = []) {
    $judet = new stdClass();
    $judet->nume = $nume;
    $judet->municipiu = $municipii;
	$judet->oras = $orase;
	$judet->comuna = $comune;
    return $judet;
}

function createTara($proiect, $url, $nume, $judete = [], $municipii = []) {
    $tara = new stdClass();
    $tara->proiect = $proiect;
    $tara->url = $url;
    $tara->nume = $nume;
    $tara->judet = $judete;
	$tara->municipiu = $municipii;
    return $tara;
}

$tara = createTara(
    "LEGE nr. 2 din 16 februarie 1968",
    "https://legislatie.just.ro/Public/DetaliiDocument/189",
    "România",
    [
        createJudet(
            "ALBA",
            [
                createMunicipiu("ALBA IULIA", [
                    createLoc("ALBA IULIA", "oras"),
                    createLoc("Bărăbanț", "sat"),
                    createLoc("Micești", "sat"),
                    createLoc("Oarda", "sat"),
                    createLoc("Pâclișa", "sat"),
                ]),
                createMunicipiu("AIUD",[
				    createLoc("AIUD", "oras",[
					   createLoc("Ciumbrud", "sat"),
					   createLoc("Gârbova de Jos", "sat"),
					   createLoc("Gârbova de Sus", "sat"),
					   createLoc("Gârbovița", "sat"),
					   createLoc("Sâncrai", "sat"),
					   createLoc("Țifra", "sat"),
					                         ]),
					createLoc("Aiudul de Sus", "sat"),
					createLoc("Gâmbaș", "sat"),
					createLoc("Măgina", "sat"),
					createLoc("Păgida", "sat"),
				]),
                createMunicipiu("BLAJ",[
					createLoc("BLAJ", "oras",[
					       createLoc("Mănărade", "sat"),
					       createLoc("Spătac", "sat"),	   
					                             ]),
					createLoc("Deleni-Obârșie", "sat"),
					createLoc("Flitești", "sat"),
					createLoc("Izvoarele", "sat"),
					createLoc("Petrisat", "sat"),
					createLoc("Tiur", "sat"),
					createLoc("Veza", "sat"),
				          ]),
                createMunicipiu("SEBEȘ",[
				    createLoc("SEBEȘ", "oras",[
					      createLoc("Răhău", "sat"),
					    ]),
					createLoc("Lancrăm", "sat"),
					createLoc("Petrești", "sat"),
				]),
				
            ],
			[
			createOras("ABRUD",[
			    createLoc("ABRUD", "oras"),
				createLoc("Abrud-Sat", "sat"),
				createLoc("Gura Cornei", "sat"),
				createLoc("Soharu", "sat"),
			                   ]),
			createOras("BAIA DE ARIEȘ",[
			    createLoc("BAIA DE ARIEȘ", "oras",[
				     createLoc("Brăzești", "sat"),
					 createLoc("Cioara de Sus", "sat"),
					 createLoc("Muncelu", "sat"),
					 createLoc("Sartăș", "sat"),
					 createLoc("Simulești", "sat"),
				                                  ]),
				
			                             ]),
			createOras("CÂMPENI", [
			    createLoc("CÂMPENI", "oras"),
				createLoc("Boncești", "sat"),
				createLoc("Borlești", "sat"),
				createLoc("Botești", "sat"),
				createLoc("Certege", "sat"),
				createLoc("Coasta Vâscului", "sat"),
				createLoc("Dănduț", "sat"),
				createLoc("Dealu Bistrii", "sat"),
				createLoc("Dealu Capsei", "sat"),
				createLoc("Dric", "sat"),
				createLoc("Fața Abrudului", "sat"),
				createLoc("Florești", "sat"),
				createLoc("Furduiești", "sat"),
				createLoc("Mihoești", "sat"),
				createLoc("Motorăști", "sat"),
				createLoc("Peste Valea Bistrii", "sat"),
				createLoc("Poduri", "sat"),
				createLoc("Sorlița", "sat"),
				createLoc("Tomușești", "sat"),
				createLoc("Valea Bistrii", "sat"),
				createLoc("Valea Caselor", "sat"),
				createLoc("Vârși", "sat"),
			                     ]),
			createOras("CUGIR", [
			    createLoc("CUGIR", "oras"),
				createLoc("Bocșitura", "sat"),
				createLoc("Bucuru", "sat"),
				createLoc("Călene", "sat"),
				createLoc("Fețeni", "sat"),
				createLoc("Goașele", "sat"),
				createLoc("Mugești", "sat"),
				createLoc("Vinerea", "sat"),
			                     ]),
			createOras("OCNA MUREȘ", [
			    createLoc("OCNA MUREȘ", "oras",[
					createLoc("Cisteiu de Mureș", "sat"),
					createLoc("Micoșlaca", "sat"),
					createLoc("Războieni-Cetate", "sat"),
										]),
				createLoc("Uioara de Jos", "sat"),
				createLoc("Uioara de Sus", "sat"),
			                     ]),
			createOras("TEIUȘ", [
			    createLoc("TEIUȘ", "oras",[
					createLoc("Beldiu", "sat"),
					createLoc("Căpud", "sat"),
					createLoc("Coșlariu Nou", "sat"),
					createLoc("Pețelca", "sat"),
										]),
			                     ]),
			createOras("ZLATNA", [
			    createLoc("ZLATNA", "oras",[
					createLoc("Botești", "sat"),
					createLoc("Budeni", "sat"),
					createLoc("Dealu Roatei", "sat"),
					createLoc("Dobrot", "sat"),
					createLoc("Dumbrava", "sat"),
					createLoc("Feneș", "sat"),
					createLoc("Galați", "sat"),
					createLoc("Izvoru Ampoiului", "sat"),
					createLoc("Pătrângeni", "sat"),
					createLoc("Pirita", "sat"),
					createLoc("Pârău Gruiului", "sat"),
					createLoc("Podu lui Paul", "sat"),
					createLoc("Runc", "sat"),
					createLoc("Ruși", "sat"),
					createLoc("Suseni", "sat"),
					createLoc("Trâmpoiele", "sat"),
					createLoc("Valea Mică", "sat"),
					createLoc("Vâltori", "sat"),
										]),
			                     ]),
			
			],
			[
			createComuna("Albac", [
					createLoc("Albac", "sat"),
					createLoc("Bărăști", "sat"),
					createLoc("Budăiești", "sat"),
					createLoc("Cionești", "sat"),
					createLoc("Costești", "sat"),
					createLoc("Dealu Lămășoi", "sat"),
					createLoc("Deve", "sat"),
					createLoc("După Pleșe", "sat"),
					createLoc("Fața", "sat"),
					createLoc("Pleșești", "sat"),
					createLoc("Potionci", "sat"),
					createLoc("Rogoz", "sat"),
					createLoc("Roșești", "sat"),
					createLoc("Rusești", "sat"),
					createLoc("Sohodol", "sat"),
					createLoc("Tamborești", "sat"),
								  ]),
			createComuna("Almașu Mare", [
					createLoc("Almașu Mare", "sat"),
					createLoc("Almașu de Mijloc", "sat"),
					createLoc("Brădet", "sat"),
					createLoc("Cheile Cibului", "sat"),
					createLoc("Cib", "sat"),
					createLoc("Glod", "sat"),
					createLoc("Nădăștia", "sat"),
								  ]),	
			createComuna("Arieșeni", [
					createLoc("Arieșeni", "sat"),
					createLoc("Avrămești", "sat"),
					createLoc("Bubești", "sat"),
					createLoc("Casa de Piatră", "sat"),
					createLoc("Cobleș", "sat"),
					createLoc("Dealu Bajului", "sat"),
					createLoc("Fața Cristesei", "sat"),
					createLoc("Fața Lăpușului", "sat"),
					createLoc("Galbena", "sat"),
					createLoc("Hodobana", "sat"),
					createLoc("Izlaz", "sat"),
					createLoc("Păntești", "sat"),
					createLoc("Pătrăhăițești", "sat"),
					createLoc("Poienița", "sat"),
					createLoc("Ravicești", "sat"),
					createLoc("Sturu", "sat"),
					createLoc("Ștei-Arieșeni", "sat"),
					createLoc("Vanvucești", "sat"),
								  ]),
			createComuna("Avram Iancu", [
					createLoc("Avram Iancu", "sat"),
					createLoc("Achimețești", "sat"),
					createLoc("Avrămești", "sat"),
					createLoc("Bădăi", "sat"),
					createLoc("Boldești", "sat"),
					createLoc("Călugărești", "sat"),
					createLoc("Căsoaia", "sat"),
					createLoc("Cândești", "sat"),
					createLoc("Cârăști", "sat"),
					createLoc("Cârțulești", "sat"),
					createLoc("Cocești", "sat"),
					createLoc("Cocoșești", "sat"),
					createLoc("Coroiești", "sat"),
					createLoc("Dealu Crișului", "sat"),
					createLoc("Dolești", "sat"),
					createLoc("Dumăcești", "sat"),
					createLoc("Gojeiești", "sat"),
					createLoc("Helerești", "sat"),
					createLoc("Incești", "sat"),
					createLoc("Jojei", "sat"),
					createLoc("Mărtești", "sat"),
					createLoc("Orgești", "sat"),
					createLoc("Pătruțești", "sat"),
					createLoc("Plai", "sat"),
					createLoc("Pușelești", "sat"),
					createLoc("Șoicești", "sat"),
					createLoc("Ștertești", "sat"),
					createLoc("Târsa", "sat"),
					createLoc("Târsa-Plai", "sat"),
					createLoc("Valea Maciului", "sat"),
					createLoc("Valea Uțului", "sat"),
					createLoc("Verdești", "sat"),
					createLoc("Vidrișoara", "sat"),
								  ]),
			createComuna("Berghin", [
					createLoc("Berghin", "sat"),
					createLoc("Ghirbom", "sat"),
					createLoc("Henig", "sat"),
					createLoc("Straja", "sat"),					
								  ]),
			createComuna("Bistra", [
					createLoc("Bistra", "sat"),
					createLoc("Aronești", "sat"),
					createLoc("Bălești", "sat"),
					createLoc("Bălești-Cătun", "sat"),
					createLoc("Bârlești", "sat"),
					createLoc("Cheleteni", "sat"),
					createLoc("Ciuldești", "sat"),
					createLoc("Crețești", "sat"),
					createLoc("Dealu Muntelui", "sat"),
					createLoc("Dâmbureni", "sat"),
					createLoc("Durăști", "sat"),
					createLoc("Gănești", "sat"),
					createLoc("Gârde", "sat"),
					createLoc("Hodișești", "sat"),
					createLoc("Hudricești", "sat"),
					createLoc("Lipaia", "sat"),
					createLoc("Lunca Largă", "sat"),
					createLoc("Lunca Merilor", "sat"),
					createLoc("Mihăiești", "sat"),
					createLoc("Nămaș", "sat"),
					createLoc("Novăcești", "sat"),
					createLoc("Perjești", "sat"),
					createLoc("Poiana", "sat"),
					createLoc("Poiu", "sat"),
					createLoc("Rătitiș", "sat"),
					createLoc("Runcuri", "sat"),
					createLoc("Sălăgești", "sat"),
					createLoc("Ștefanca", "sat"),
					createLoc("Tolăcești", "sat"),
					createLoc("Tomnatec", "sat"),
					createLoc("Trișorești", "sat"),
					createLoc("Țărănești", "sat"),
					createLoc("Vârși-Rontu", "sat"),
					createLoc("Vârșii Mari", "sat"),
					createLoc("Vârșii Mici", "sat"),							
								  ]),
			createComuna("Blandiana", [
					createLoc("Blandiana", "sat"),
					createLoc("Acmariu", "sat"),
					createLoc("Ibru", "sat"),
					createLoc("Poieni", "sat"),
					createLoc("Răcătău", "sat"),						
								  ]),
			createComuna("Bucerdea Grânoasă", [
					createLoc("Bucerdea Grânoasă", "sat"),
					createLoc("Cornu", "sat"),
					createLoc("Pădure", "sat"),
					createLoc("Pânca", "sat"),						
								  ]),
			createComuna("Bucium", [
					createLoc("Bucium", "sat"),
					createLoc("Anghelești", "sat"),
					createLoc("Bisericani", "sat"),
					createLoc("Bucium-Sat", "sat"),
					createLoc("Cerbu", "sat"),
					createLoc("Ciuculești", "sat"),
					createLoc("Coleșeni", "sat"),
					createLoc("Dogărești", "sat"),
					createLoc("Ferești", "sat"),
					createLoc("Florești", "sat"),
					createLoc("Gura Izbitei", "sat"),
					createLoc("Helești", "sat"),
					createLoc("Izbicioara", "sat"),
					createLoc("Izbita", "sat"),
					createLoc("Jurcuiești", "sat"),
					createLoc("Lupulești", "sat"),	
					createLoc("Măgura", "sat"),
					createLoc("Muntari", "sat"),
					createLoc("Petreni", "sat"),
					createLoc("Poiana", "sat"),
					createLoc("Poieni", "sat"),
					createLoc("Stâlnișoara", "sat"),
					createLoc("Valea Abruzel", "sat"),
					createLoc("Valea Albă", "sat"),
					createLoc("Valea Cerbului", "sat"),
					createLoc("Valea Negrilesii", "sat"),
					createLoc("Valea Poienii", "sat"),
					createLoc("Valea Șesii", "sat"),
					createLoc("Văleni", "sat"),
					createLoc("Vâlcea", "sat"),				
								  ]),
			createComuna("Câlnic", [
					createLoc("Câlnic", "sat"),
					createLoc("Deal", "sat"),						
								  ]),
			createComuna("Cenade", [
					createLoc("Cenade", "sat"),
					createLoc("Capu Dealului", "sat"),
					createLoc("Gorgan", "sat"),					
								  ]),
			createComuna("Cergău", [
					createLoc("Cergău Mare", "sat"),
					createLoc("Cergău Mic", "sat"),
					createLoc("Lupu", "sat"),					
								  ]),	
			createComuna("Ceru-Băcăinți", [
					createLoc("Ceru-Băcăinți", "sat"),
					createLoc("Bolovănești", "sat"),
					createLoc("Bulbuc", "sat"),
					createLoc("Cucuta", "sat"),
					createLoc("Curpeni", "sat"),
					createLoc("Dumbrăvița", "sat"),
					createLoc("Fântânele", "sat"),
					createLoc("Groși", "sat"),
					createLoc("Valea Mare", "sat"),
					createLoc("Viezuri", "sat"),				
								  ]),
			createComuna("Cetatea de Baltă", [
					createLoc("Cetatea de Baltă", "sat"),
					createLoc("Crăciunelu de Sus", "sat"),
					createLoc("Sântămărie", "sat"),	
					createLoc("Tătârlaua", "sat"),						
								  ]),	
			createComuna("Ciugud", [
					createLoc("Ciugud", "sat"),
					createLoc("Drâmbar", "sat"),
					createLoc("Hăpria", "sat"),	
					createLoc("Limba", "sat"),
					createLoc("Șeușa", "sat"),	
					createLoc("Teleac", "sat"),						
								  ]),
			createComuna("Ciuruleasa", [
					createLoc("Ciuruleasa", "sat"),
					createLoc("Bidigești", "sat"),
					createLoc("Bodrești", "sat"),	
					createLoc("Boglești", "sat"),
					createLoc("Buninginea", "sat"),	
					createLoc("Ghedulești", "sat"),
					createLoc("Mătișești", "sat"),
					createLoc("Morărești", "sat"),
					createLoc("Vulcan", "sat"),						
								  ]),
			createComuna("Crăciunelu de Jos", [
					createLoc("Crăciunelu de Jos", "sat"),						
								  ]),	
			createComuna("Cricău", [
					createLoc("Cricău", "sat"),
					createLoc("Craiva", "sat"),
					createLoc("Tibru", "sat"),						
								  ]),
			createComuna("Cut", [
					createLoc("Cut", "sat"),						
								  ]),
			createComuna("Daia Română", [
					createLoc("Daia Română", "sat"),						
								  ]),
			createComuna("Doștat", [
					createLoc("Doștat", "sat"),	
					createLoc("Boz", "sat"),
					createLoc("Dealu Doștatului", "sat"),					
								  ]),
			createComuna("Fărău", [
					createLoc("Fărău", "sat"),	
					createLoc("Heria", "sat"),
					createLoc("Medveș", "sat"),		
					createLoc("Sânbenedic", "sat"),	
					createLoc("Șilea", "sat"),						
								  ]),
			createComuna("Galda de Jos", [
					createLoc("Galda de Jos", "sat"),	
					createLoc("Benic", "sat"),
					createLoc("Cetea", "sat"),		
					createLoc("Galda de Sus", "sat"),	
					createLoc("Lupșeni", "sat"),
					createLoc("Măgura", "sat"),	
					createLoc("Mesentea", "sat"),
					createLoc("Oiejdea", "sat"),		
					createLoc("Poaiana Galdei", "sat"),	
					createLoc("Răicani", "sat"),
					createLoc("Zăgriș", "sat"),						
								  ]),
			createComuna("Gârbova", [
					createLoc("Gârbova", "sat"),	
					createLoc("Cărpiniș", "sat"),
					createLoc("Reciu", "sat"),								
								  ]),
			createComuna("Gârda de Sus", [
					createLoc("Gârda de Sus", "sat"),	
					createLoc("Biharia", "sat"),
					createLoc("Dealu Frumos", "sat"),
					createLoc("Dealu Ordâncușii", "sat"),	
					createLoc("Dobrești", "sat"),
					createLoc("Ghețari", "sat"),
					createLoc("Gârda Seacă", "sat"),	
					createLoc("Hanășești", "sat"),
					createLoc("Huzărești", "sat"),
					createLoc("Izvoarele", "sat"),	
					createLoc("Munună", "sat"),
					createLoc("Ocoale", "sat"),	
					createLoc("Plai", "sat"),	
					createLoc("Pliști", "sat"),
					createLoc("Scoarța", "sat"),
					createLoc("Snide", "sat"),	
					createLoc("Sucești", "sat"),							
								  ]),	
			createComuna("Hopârta", [
					createLoc("Hopârta", "sat"),	
					createLoc("Silivaș", "sat"),
					createLoc("Șpălnaca", "sat"),
					createLoc("Turdaș", "sat"),	
					createLoc("Vama Seacă", "sat"),						
								  ]),
			createComuna("Horea", [
					createLoc("Horea", "sat"),	
					createLoc("Baba", "sat"),
					createLoc("Butești", "sat"),
					createLoc("Dârlești", "sat"),	
					createLoc("Fericet", "sat"),	
					createLoc("Giurgiuț", "sat"),	
					createLoc("Măncești", "sat"),
					createLoc("Mătișești", "sat"),
					createLoc("Niculești", "sat"),	
					createLoc("Pătrușești", "sat"),	
					createLoc("Petreasa", "sat"),	
					createLoc("Preluca", "sat"),
					createLoc("Teiu", "sat"),
					createLoc("Trifești", "sat"),	
					createLoc("Zânzești", "sat"),						
								  ]),
			createComuna("Ighiu", [
					createLoc("Ighiu", "sat"),	
					createLoc("Bucerdea Vinoasă", "sat"),
					createLoc("Ighiel", "sat"),
					createLoc("Șard", "sat"),	
					createLoc("Țelna", "sat"),							
								  ]),	
			createComuna("Întregalde", [
					createLoc("Întregalde", "sat"),	
					createLoc("Dealu Geoagiului", "sat"),
					createLoc("Ghioncani", "sat"),
					createLoc("Iliești", "sat"),	
					createLoc("Ivăniș", "sat"),	
					createLoc("Mărinești", "sat"),	
					createLoc("Modolești", "sat"),
					createLoc("Necrilești", "sat"),
					createLoc("Popești", "sat"),	
					createLoc("Sfârcea", "sat"),
					createLoc("Tecșești", "sat"),					
								  ]),
			createComuna("Jidvei", [
					createLoc("Jidvei", "sat"),	
					createLoc("Bălcaciu", "sat"),
					createLoc("Căpâlna de Jos", "sat"),
					createLoc("Feisa", "sat"),	
					createLoc("Veseuș", "sat"),						
								  ]),
			createComuna("Livezile", [
					createLoc("Livezile", "sat"),	
					createLoc("Izvoarele", "sat"),
					createLoc("Poiana Aiudului", "sat"),
					createLoc("Vălișoara", "sat"),							
								  ]),
			createComuna("Lopadea Nouă", [
					createLoc("Lopadea Nouă", "sat"),	
					createLoc("Asinip", "sat"),
					createLoc("Beța", "sat"),
					createLoc("Băgău", "sat"),	
					createLoc("Cicârd", "sat"),	
					createLoc("Ciuguzel", "sat"),
					createLoc("Ocnișoara", "sat"),
					createLoc("Odverem", "sat"),						
								  ]),	
			createComuna("Lunca Mureșului", [
					createLoc("Lunca Mureșului", "sat"),	
					createLoc("Gura Arieșului", "sat"),						
								  ]),
			createComuna("Lupșa", [
					createLoc("Lupșa", "sat"),	
					createLoc("Bârdești", "sat"),
					createLoc("Bârzan", "sat"),	
					createLoc("Curmătură", "sat"),
					createLoc("După Deal", "sat"),
					createLoc("Geamăna", "sat"),	
					createLoc("Hădărău", "sat"),
					createLoc("Holobani", "sat"),	
					createLoc("Lazuri", "sat"),
					createLoc("Lunca", "sat"),		
					createLoc("Mănăstire", "sat"),	
					createLoc("Mărgaia", "sat"),
					createLoc("Mușca", "sat"),	
					createLoc("Pițiga", "sat"),
					createLoc("Pârâu-Cărbunări", "sat"),
					createLoc("Poșogani", "sat"),	
					createLoc("Șasa", "sat"),
					createLoc("Trifești", "sat"),	
					createLoc("Valea Holhorii", "sat"),
					createLoc("Valea Lupșii", "sat"),	
					createLoc("Valea Șesii", "sat"),
					createLoc("Văi", "sat"),	
					createLoc("Vința", "sat"),						
								  ]),
			createComuna("Meteș", [
					createLoc("Meteș", "sat"),	
					createLoc("Ampoița", "sat"),
					createLoc("Isca", "sat"),	
					createLoc("Lunca Ampoiței", "sat"),
					createLoc("Lunca Meteșului", "sat"),
					createLoc("Pădurea", "sat"),	
					createLoc("Poiana Ampoiului", "sat"),
					createLoc("Poiana Ursului", "sat"),	
					createLoc("Presaca Ampoiului", "sat"),
					createLoc("Remetea", "sat"),		
					createLoc("Tăuți", "sat"),	
					createLoc("Văleni", "sat"),					
								  ]),
			createComuna("Mihalț", [
					createLoc("Mihalț", "sat"),	
					createLoc("Cistei", "sat"),
					createLoc("Obreja", "sat"),	
					createLoc("Zărieș", "sat"),				
								  ]),
			createComuna("Mirăslău", [
					createLoc("Mirăslău", "sat"),	
					createLoc("Cicău", "sat"),
					createLoc("Decea", "sat"),	
					createLoc("Lopadea Veche", "sat"),
					createLoc("Ormeniș", "sat"),	
					createLoc("Rachiș", "sat"),				
								  ]),	
			createComuna("Mogoș", [
					createLoc("Mogoș", "sat"),	
					createLoc("Bărbești", "sat"),
					createLoc("Bârlești", "sat"),	
					createLoc("Bârlești-Cătun", "sat"),
					createLoc("Bârzogani", "sat"),	
					createLoc("Bocești", "sat"),
					createLoc("Bogdănești", "sat"),	
					createLoc("Butești", "sat"),
					createLoc("Cojocani", "sat"),	
					createLoc("Cristești", "sat"),
					createLoc("Mămăligani", "sat"),	
					createLoc("Negrești", "sat"),	
					createLoc("Oncești", "sat"),	
					createLoc("Poienile-Mogoș", "sat"),
					createLoc("Tomești", "sat"),	
					createLoc("Valea Barnii", "sat"),
					createLoc("Valea Bârluțești", "sat"),	
					createLoc("Valea Cocești", "sat"),
					createLoc("Valea Giogești", "sat"),	
					createLoc("Valea Mlacii", "sat"),
					createLoc("Valea Țupilor", "sat"),							
								  ]),
			createComuna("Noșlac", [
					createLoc("Noșlac", "sat"),	
					createLoc("Căptălan", "sat"),
					createLoc("Copand", "sat"),	
					createLoc("Găbud", "sat"),
					createLoc("Stâna de Mureș", "sat"),	
					createLoc("Valea Ciuciului", "sat"),						
								  ]),								  
			]),
        createJudet("ARAD", [
			createMunicipiu("ARAD"),
			createOras("CHIȘINEU-CRIȘ", [
			    createLoc("CHIȘINEU-CRIȘ", "oras",[
					createLoc("Nădab", "sat"),
				]),
			]),
			createOras("CHIȘINEU-CRIȘ", [
				createLoc("CHIȘINEU-CRIȘ", "oras",[
					createLoc("Nădab", "sat"),
				]),
			]),
            createOras("INEU", [
			    createLoc("INEU", "oras",[
					createLoc("Mocrea", "sat"),
										]),
			                     ]),
			createOras("LIPOVA", [
				createLoc("LIPOVA", "oras"),
				createLoc("Radna", "oras"),
				createLoc("Șoimoș", "oras"),
								 ]),
			createOras("NĂDLAC", [
			    createLoc("NĂDLAC", "oras"),
										]),
								
			createOras("PECICA", [
				createLoc("PECICA", "oras",[
					createLoc("Bodrogu Vechi", "sat"),
					createLoc("Sederhat", "sat"),
					createLoc("Turnu", "sat"),
									    ]),
								]),
			createOras("PÂNCOTA", [
				createLoc("PÂNCOTA", "oras",[
					createLoc("Măderat", "sat")
										]),
								]),
			createOras("SÂNTANA", [
				createLoc("SÂNTANA", "oras",[
					createLoc("Caporal Alexa", "sat")
										]),
								]),
			createOras("SEBIȘ", [
				createLoc("SEBIȘ", "oras",[
					createLoc("Donceni", "sat"),
					createLoc("Prunișor", "sat"),
					createLoc("Sălăjeni", "sat")
										]),
								]),	
			createComuna("Almaș", [
					createLoc("Almaș", "sat"),
					createLoc("Cil", "sat"),
					createLoc("Joia Mare", "sat"),
					createLoc("Rădești", "sat"),
								  ]),	
			createComuna("Apateu", [
					createLoc("Apateu", "sat"),
					createLoc("Berechiu", "sat"),
					createLoc("Moțiori", "sat"),
								  ]),
			createComuna("Archiș", [
					createLoc("Archiș", "sat"),
					createLoc("Bârzești", "sat"),
					createLoc("Groșeni", "sat"),
					createLoc("Nermiș", "sat"),
								  ]),	
			createComuna("Bata", [
					createLoc("Bata", "sat"),
					createLoc("Bacău de Mijloc", "sat"),
					createLoc("Bulci", "sat"),
					createLoc("Țela", "sat"),
								  ]),
		    createComuna("Beliu", [
					createLoc("Beliu", "sat"),
					createLoc("Benești", "sat"),
					createLoc("Bochia", "sat"),
					createLoc("Secaci", "sat"),
					createLoc("Tăgădău", "sat"),
					createLoc("Vasile Goldiș", "sat"),
								  ]),	
			createComuna("Birchiș", [
					createLoc("Birchiș", "sat"),
					createLoc("Căpălnaș", "sat"),
					createLoc("Ostrov", "sat"),
					createLoc("Virismort", "sat"),
								  ]),
			createComuna("Bârsa", [
					createLoc("Bârsa", "sat"),
					createLoc("Aldești", "sat"),
					createLoc("Hodiș", "sat"),
					createLoc("Voivodeni", "sat"),
								  ]),	
			createComuna("Bârzava", [
					createLoc("Bârzava", "sat"),
					createLoc("Bătuța", "sat"),
					createLoc("Căpruța", "sat"),
					createLoc("Dumbrăvița", "sat"),
					createLoc("Groșii Noi", "sat"),
					createLoc("Lalașinț", "sat"),
					createLoc("Monoroștia", "sat"),
					createLoc("Slatina de Mureș", "sat"),
								  ]),	
			createComuna("Bocsig", [
					createLoc("Bocsig", "sat"),
					createLoc("Mânerău", "sat"),
					createLoc("Răpsig", "sat"),
								  ]),	
			createComuna("Brazii", [
					createLoc("Brazii", "sat"),
					createLoc("Buceava-Șoimuș", "sat"),
					createLoc("Iacobini", "sat"),
					createLoc("Mădrigești", "sat"),
					createLoc("Secaș", "sat"),
								  ]),
			createComuna("Buteni", [
					createLoc("Buteni", "sat"),
					createLoc("Berindia", "sat"),
					createLoc("Cuied", "sat"),
					createLoc("Păulian", "sat"),
								  ]),	
			createComuna("Cărand", [
					createLoc("Cărand", "sat"),
					createLoc("Seliștea", "sat"),
								  ]),	
			createComuna("Cermei", [
					createLoc("Cermei", "sat"),
					createLoc("Avram Iancu", "sat"),
					createLoc("Șomoșcheș", "sat"),
								  ]),	
			createComuna("Chisindia", [
					createLoc("Chisindia", "sat"),
					createLoc("Păiușeni", "sat"),
					createLoc("Văsoaia", "sat"),
								  ]),
			createComuna("Conop", [
					createLoc("Conop", "sat"),
					createLoc("Belotinț", "sat"),
					createLoc("Chelmac", "sat"),
					createLoc("Milova", "sat"),
					createLoc("Odvoș", "sat"),
								  ]),	
			createComuna("Covăsinț", [
					createLoc("Covăsinț", "sat"),
								  ]),
			createComuna("Craiva", [
					createLoc("Craiva", "sat"),
					createLoc("Chișlaca", "sat"),
					createLoc("Ciuntești", "sat"),
					createLoc("Coroi", "sat"),
					createLoc("Mărăuș", "sat"),
					createLoc("Rogoz de Beliu", "sat"),
					createLoc("Stoinești", "sat"),
					createLoc("Susag", "sat"),
					createLoc("Șiad", "sat"),
					createLoc("Tălmaci", "sat"),
								  ]),	
			createComuna("Dezna", [
					createLoc("Dezna", "sat"),
					createLoc("Buhani", "sat"),
					createLoc("Laz", "sat"),
					createLoc("Neagra", "sat"),
					createLoc("Slatina de Criș", "sat"),
								  ]),
			createComuna("Dieci", [
					createLoc("Dieci", "sat"),
					createLoc("Cociuba", "sat"),
					createLoc("Crocna", "sat"),
					createLoc("Revetiș", "sat"),
					createLoc("Roșia", "sat"),
								  ]),	
			createComuna("Dorobanți", [
					createLoc("Dorobanți", "sat"),
								  ]),	
			createComuna("Fântânele", [
					createLoc("Fântânele", "sat"),
					createLoc("Tisa Nouă", "sat"),
								  ]),	
			createComuna("Felnac", [
					createLoc("Felnac", "sat"),
					createLoc("Călugăreni", "sat"),
								  ]),	
			createComuna("Frumușeni", [
					createLoc("Frumușeni", "sat"),
					createLoc("Aluniș", "sat"),
								  ]),	
			createComuna("Ghioroc", [
					createLoc("Ghioroc", "sat"),
					createLoc("Cuvin", "sat"),
					createLoc("Miniș", "sat"),
								  ]),
			createComuna("Grăniceri", [
					createLoc("Grăniceri", "sat"),
					createLoc("Șiclău", "sat"),
								  ]),	
			createComuna("Gurahonț", [
					createLoc("Gurahonț", "sat"),
					createLoc("Bonțești", "sat"),
					createLoc("Dulcele", "sat"),
					createLoc("Feniș", "sat"),
					createLoc("Honțișor", "sat"),
					createLoc("Iosaș", "sat"),
					createLoc("Mustești", "sat"),
					createLoc("Pescari", "sat"),
					createLoc("Valea Mare", "sat"),
					createLoc("Zimbru", "sat"),
								  ]),
			createComuna("Hălmagiu", [
					createLoc("Hălmagiu", "sat"),
					createLoc("Bănești", "sat"),
					createLoc("Bodești", "sat"),
					createLoc("Brusturi", "sat"),
					createLoc("Cristești", "sat"),
					createLoc("Ionești", "sat"),
					createLoc("Leasa", "sat"),
					createLoc("Leștioara", "sat"),
					createLoc("Poienari", "sat"),
					createLoc("Tisa", "sat"),
					createLoc("Țărmure", "sat"),
								  ]),	
			createComuna("Hălmăgel", [
					createLoc("Hălmăgel", "sat"),
					createLoc("Luncșoara", "sat"),
					createLoc("Sârbi", "sat"),
					createLoc("Târnăvița", "sat"),
					createLoc("Țohești", "sat"),
								  ]),
			createComuna("Hășmaș", [
					createLoc("Hășmaș", "sat"),
					createLoc("Agrișu Mic", "sat"),
					createLoc("Botfei", "sat"),
					createLoc("Clit", "sat"),
					createLoc("Comănești", "sat"),
					createLoc("Urvișu de Beliu", "sat"),
								  ]),	
			createComuna("Ignești", [
					createLoc("Ignești", "sat"),
					createLoc("Minead", "sat"),
					createLoc("Nădălbești", "sat"),
					createLoc("Susani", "sat"),
								  ]),
			createComuna("Iratoșu", [
					createLoc("Iratoșu", "sat"),
					createLoc("Variașu Mare", "sat"),
					createLoc("Variașu Mic", "sat"),
								  ]),	
			createComuna("Livada", [
					createLoc("Livada", "sat"),
					createLoc("Sânleani", "sat"),
								  ]),
			createComuna("Macea", [
					createLoc("Macea", "sat"),
					createLoc("Sânmartin", "sat"),
								  ]),	
			createComuna("Mișca", [
					createLoc("Mișca", "sat"),
					createLoc("Satu Nou", "sat"),
					createLoc("Vânători", "sat"),
					createLoc("Zerindu Mic", "sat"),
								  ]),
			createComuna("Moneasa", [
					createLoc("Moneasa", "sat"),
					createLoc("Rănușa", "sat"),
								  ]),	
			createComuna("Olari", [
					createLoc("Olari", "sat"),
					createLoc("Sintea Mică", "sat"),
								  ]),
			createComuna("Păuliș", [
					createLoc("Păuliș", "sat"),
					createLoc("Barațca", "sat"),
					createLoc("Cladova", "sat"),
					createLoc("Sâmbăteni", "sat"),
								  ]),	
			createComuna("Peregu Mare", [
					createLoc("Peregu Mare", "sat"),
					createLoc("Peregu Mic", "sat"),
								  ]),
			createComuna("Petriș", [
					createLoc("Petriș", "sat"),
					createLoc("Corbești", "sat"),
					createLoc("Ilteu", "sat"),
					createLoc("Obârșia", "sat"),
				    createLoc("Roșia Nouă", "sat"),
					createLoc("Seliște", "sat"),
								  ]),	
			createComuna("Pilu", [
					createLoc("Pilu", "sat"),
					createLoc("Vărșand", "sat"),
								  ]),
			createComuna("Pleșcuța", [
					createLoc("Pleșcuța", "sat"),
					createLoc("Aciuța", "sat"),
					createLoc("Budești", "sat"),
					createLoc("Dumbrava", "sat"),
				    createLoc("Gura Văii", "sat"),
					createLoc("Rostoci", "sat"),
					createLoc("Tălagiu", "sat"),
								  ]),	
			createComuna("Săvârșin", [
					createLoc("Săvârșin", "sat"),
					createLoc("Căprioara", "sat"),
					createLoc("Cuiaș", "sat"),
					createLoc("Hălăliș", "sat"),
					createLoc("Pârnești", "sat"),
					createLoc("Temeșești", "sat"),
					createLoc("Toc", "sat"),
					createLoc("Troaș", "sat"),
					createLoc("Valea Mare", "sat"),
								  ]),
			createComuna("Secusigiu", [
					createLoc("Secusigiu", "sat"),
					createLoc("Munar", "sat"),
					createLoc("Satu Mare", "sat"),
					createLoc("Sânpetru German", "sat"),
								  ]),	
			createComuna("Seleuș", [
					createLoc("Seleuș", "sat"),
					createLoc("Iermata", "sat"),
					createLoc("Moroda", "sat"),
								  ]),
			createComuna("Semlac", [
					createLoc("Semlac", "sat"),
								  ]),	
			createComuna("Sintea Mare", [
					createLoc("Sintea Mare", "sat"),
					createLoc("Adea", "sat"),
					createLoc("Țipar", "sat"),
								  ]),
			createComuna("Socodor", [
					createLoc("Socodor", "sat"),
								  ]),	
			createComuna("Șagu", [
					createLoc("Șagu", "sat"),
					createLoc("Cruceni", "sat"),
					createLoc("Firiteaz", "sat"),
					createLoc("Fiscut", "sat"),
					createLoc("Hunedoara Timișană", "sat"),
								  ]),
			createComuna("Șeitin", [
					createLoc("Șeitin", "sat"),
								  ]),	
			createComuna("Șepreuș", [
					createLoc("Șepreuș", "sat"),
								  ]),
			createComuna("Șicula", [
					createLoc("Șicula", "sat"),
					createLoc("Chereluș", "sat"),
					createLoc("Gurba", "sat"),
								  ]),	
			createComuna("Șilindia", [
					createLoc("Șilindia", "sat"),
					createLoc("Camna", "sat"),
					createLoc("Iercoșeni", "sat"),
					createLoc("Luguzău", "sat"),
					createLoc("Satu Mic", "sat"),
								  ]),
			createComuna("Șimand", [
					createLoc("Șimand"),
								  ]),	
			createComuna("Șiria", [
					createLoc("Șiria", "sat"),
					createLoc("Galșa", "sat"),
					createLoc("Mâsca", "sat"),
								  ]),
			createComuna("Șiștarovăț", [
					createLoc("Șiștarovăț", "sat"),
					createLoc("Cuveșdia", "sat"),
					createLoc("Labașinț", "sat"),
					createLoc("Varnița", "sat"),
								  ]),	
			createComuna("Șofronea", [
					createLoc("Șofronea", "sat"),
					createLoc("Sânpaul", "sat"),
								  ]),
			createComuna("Tauț", [
					createLoc("Tauț", "sat"),
					createLoc("Minișel", "sat"),
					createLoc("Minișu de Sus", "sat"),
					createLoc("Nadăș", "sat"),
								  ]),	
			createComuna("Târnova", [
					createLoc("Târnova", "sat"),
					createLoc("Agrișu Mare", "sat"),
					createLoc("Arăneag", "sat"),
					createLoc("Chier", "sat"),
					createLoc("Drauț", "sat"),
					createLoc("Dud", "sat"),
								  ]),
			createComuna("Ususău", [
					createLoc("Ususău", "sat"),
					createLoc("Bruznic", "sat"),
					createLoc("Dorgoș", "sat"),
					createLoc("Pătârș", "sat"),
					createLoc("Zăbalț", "sat"),
								  ]),	
			createComuna("Vărădia de Mureș", [
					createLoc("Vărădia de Mureș", "sat"),
					createLoc("Baia", "sat"),
					createLoc("Julița", "sat"),
					createLoc("Lupești", "sat"),
					createLoc("Nicolae Bălcescu", "sat"),
					createLoc("Stejar", "sat"),
								  ]),
			createComuna("Vinga", [
					createLoc("Vinga", "sat"),
					createLoc("Mailat", "sat"),
					createLoc("Mănăștur", "sat"),
								  ]),	
			createComuna("Vârfurile", [
					createLoc("Vârfurile", "sat"),
					createLoc("Avram Iancu", "sat"),
					createLoc("Groși", "sat"),
					createLoc("Lazuri", "sat"),
					createLoc("Măgulicea", "sat"),
					createLoc("Mermești", "sat"),
					createLoc("Poiana", "sat"),
					createLoc("Vidra", "sat"),
								  ]),
		]),					
		createJudet("ARGEȘ"),
		createJudet("BACĂU"),
		createJudet("BIHOR"),
		createJudet("BISTRIȚA-NĂSĂUD"),
		createJudet("BOTOȘANI"),
		createJudet("BRAȘOV"),
		createJudet("BRĂILA"),
		createJudet("BUZĂU"),
		createJudet("CARAȘ-SEVERIN"),
		createJudet("CĂLĂRAȘI"),
		createJudet("CLUJ"),
		createJudet("CONSTANȚA"),
        createJudet("COVASNA"),
		createJudet("DÂMBOVIȚA"),
		createJudet("DOLJ"),
		createJudet("GALAȚI"),
		createJudet("GIURGIU"),
		createJudet("GORJ"),
		createJudet("HARGHITA"),
		createJudet("HUNEDOARA"),
		createJudet("IALOMIȚA"),
		createJudet("IAȘI"),
		createJudet("ILFOV"),
		createJudet("MARAMUREȘ"),
		createJudet("MEHEDINȚI"),
		createJudet("MUREȘ"),
		createJudet("NEAMȚ"),
		createJudet("OLT"),
		createJudet("PRAHOVA"),
		createJudet("SATU MARE"),
		createJudet("SĂLAJ"),
		createJudet("SIBIU"),
		createJudet("SUCEAVA"),
		createJudet("TELEORMAN"),
		createJudet("TIMIȘ"),
		createJudet("TULCEA"),
		createJudet("VASLUI"),
		createJudet("VÂLCEA"),
		createJudet("VRANCEA"),
		
    ],
    [
     createMunicipiu("BUCUREȘTI")
    ]
);

echo json_encode($tara, JSON_PRETTY_PRINT);

?>