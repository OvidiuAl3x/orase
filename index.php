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