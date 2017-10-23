function Estado_municipio(mun, edo){
			
			document.getElementById(mun).innerHTML="";
			
			var cod = document.getElementById(edo).value;
			var x = document.getElementById(mun);

			if (cod=='Estado') {
				var option = document.createElement("option");
				option.text = "Municipio";
				x.add(option);

				document.getElementById("btn-agregar").disabled=true;
			}else{
				document.getElementById("btn-agregar").disabled=false;
			}
			if (cod=='Amazonas') {
				var option = document.createElement("option");
				option.text = "Alto Orinoco";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Atabapo";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Atures";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Autana";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Manapiare";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Maroa";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Río Negro";
				x.add(option);
			}
			//--------------------------------------
			if (cod=='Anzoátegui') {
				var option = document.createElement("option");
				option.text = "Anaco";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Aragua";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Bolivar";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Bruzual";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Cajigal";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Carvajal";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Diego Bautista Urbaneja";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Freites";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Guanipa";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Guanta";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Independencia";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Libertad";
				x.add(option);

				var option = document.createElement("option");
				option.text = "McGregor";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Miranda";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Monagas";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Peñalver";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Píritu";
				x.add(option);

				var option = document.createElement("option");
				option.text = "San Juan de Capistrano";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Santa Ana";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Simón Rodriguez";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Sotillo";
				x.add(option);
			}
			//---------------------------------------
				if (cod=='Apure') {
				var option = document.createElement("option");
				option.text = "Achaguas";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Biruaca";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Muñoz";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Páez";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Pedro Camejo";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Rómulo Gallegos";
				x.add(option);
			}
			//------------------------------------
			if (cod=='Aragua') {
				var option = document.createElement("option");
				option.text = "Bolívar";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Camatagua";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Francisco Linares Alcántara";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Girardot";
				x.add(option);

				var option = document.createElement("option");
				option.text = "José Ángel Lamas";
				x.add(option);

				var option = document.createElement("option");
				option.text = "José Félix Ribas";
				x.add(option);

				var option = document.createElement("option");
				option.text = "José Rafael Revenga";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Mario Briceño Iragorry";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Ocumare de la Costa de Oro";
				x.add(option);

				var option = document.createElement("option");
				option.text = "San Casimiro";
				x.add(option);

				var option = document.createElement("option");
				option.text = "San Sebastián";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Santiago Mariño";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Santos Michelena";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Sucre";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Tovar";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Urdaneta";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Zamora";
				x.add(option);
			}
			//---------------------------------------
			if (cod=='Barinas') {
				var option = document.createElement("option");
				option.text = "Alberto Arvelo Torre Alba";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Andrés Eloy Blanco";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Antonio José de Sucre";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Arismendi";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Barinas";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Bolívar";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Cruz Paredes";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Ezequiel Zamora";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Obispos";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Pedraza";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Rojas";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Sosa";
				x.add(option);
			}
			//---------------------------------------
			if (cod=='Bolívar') {
				var option = document.createElement("option");
				option.text = "Caroní";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Cedeño";
				x.add(option);

				var option = document.createElement("option");
				option.text = "El Callao";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Gran Sabana";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Heres";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Piar";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Raúl Leoni";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Roscio";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Sifontes";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Sucre";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Padre Pedro Chen";
				x.add(option);
			}
			//---------------------------------------
			if (cod=='Carabobo') {
				var option = document.createElement("option");
				option.text = "Bejuma";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Carlos Arvelo";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Diego Ibarra";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Guacara";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Juan José Mora";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Libertador";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Los Guayos";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Miranda";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Montalbán";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Naguanagua";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Puesto Cabello";
				x.add(option);

				var option = document.createElement("option");
				option.text = "San Diego";
				x.add(option);

				var option = document.createElement("option");
				option.text = "San Juaquín";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Valencia";
				x.add(option);
			}
			//---------------------------------------
			if (cod=='Cojedes') {
				var option = document.createElement("option");
				option.text = "Anzoátegui";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Falcón";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Girardot";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Lima Blanco";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Pao De San Juan Bautista";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Ricaurte";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Romulo Gallegos";
				x.add(option);
			}
			//---------------------------------------
			if (cod=='Delta Amacuro') {
				var option = document.createElement("option");
				option.text = "Antonio Díaz Curiapo";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Casa Coima";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Pedernales";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Tucupita";
				x.add(option);
			}
			//---------------------------------------
			if (cod=='Falcón') {
				var option = document.createElement("option");
				option.text = "Acosta";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Bolívar";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Buchivacoa";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Cacique Manaure";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Carirubana";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Colina";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Los Guayos";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Dabajuro";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Democracia";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Falcón";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Fereración";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Jacura";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Los Taques";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Mauroa";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Miranda";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Monseñor Iturriza";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Paltasola";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Petit";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Píritu";
				x.add(option);

				var option = document.createElement("option");
				option.text = "San Francisco";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Silva";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Sucre";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Tocópero";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Unión";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Urumaco";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Zamora";
				x.add(option);
			}
				//---------------------------------------
			if (cod=='Guarico') {
				var option = document.createElement("option");
				option.text = "Esteros de Camaguan";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Chaguaramas";
				x.add(option);

				var option = document.createElement("option");
				option.text = "El Socorro";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Francisco de Miranda";
				x.add(option);

				var option = document.createElement("option");
				option.text = "José Felix Ribas";
				x.add(option);

				var option = document.createElement("option");
				option.text = "José Tadeo Monagas";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Juan Germán Roscio";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Julián Mellado";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Las Mercedes";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Leonardo Infante";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Pedro Zaraza";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Ortíz";
				x.add(option);

				var option = document.createElement("option");
				option.text = "San Gerónimo de Guayabal";
				x.add(option);

				var option = document.createElement("option");
				option.text = "San José de Guaribe";
				x.add(option);

				var option = document.createElement("option");
				option.text = "San María de Ipire";
				x.add(option);
			}
			//--------------------------------------------------
			if (cod=='Lara') {
				var option = document.createElement("option");
				option.text = "Andrés Eloy Blanco";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Crespo";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Iribarren";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Jiménez";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Morán";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Palavecino";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Simón Planas";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Torres";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Urdaneta";
				x.add(option);
			}
			//-----------------------------------------------------
			if (cod=='Merida') {
				var option = document.createElement("option");
				option.text = "Alberto Adriani";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Andres Bello";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Antonio Pinto Salinas";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Sucre";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Tovar";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Tulio Febres Cordero";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Zea";
				x.add(option);
			}
			//-----------------------------------------------------
			if (cod=='Miranda') {
				var option = document.createElement("option");
				option.text = "Acevedo";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Andres Bello";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Baruta";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Brión";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Buroz";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Carrizal";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Chacao";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Cristóbal Rojas";
				x.add(option);

				var option = document.createElement("option");
				option.text = "El Hatillo";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Guaicaipuro";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Independencia";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Lander";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Los Salias";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Páez";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Paz Castillo";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Pedro Gual";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Plaza";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Simón Bolívar";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Sucre";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Urdaneta";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Zamora";
				x.add(option);
			}
			//-----------------------------------------------------
			if (cod=='Monagas') {
				var option = document.createElement("option");
				option.text = "Acosta";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Aguasay";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Bolívar";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Caripe";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Cedeño";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Ezequiel Zamora";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Libertador";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Meturín";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Piar";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Punceres";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Santa Bábara";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Sotillo";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Uracoa";
				x.add(option);
			}
			//-----------------------------------------------------
			if (cod=='Nueva Esparta') {
				var option = document.createElement("option");
				option.text = "Antolín del Campo";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Arismendi";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Díaz";
				x.add(option);

				var option = document.createElement("option");
				option.text = "García";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Gómez";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Maneiro";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Marcano";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Mariño";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Península de Macanao";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Tubores";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Villalba";
				x.add(option);
			}
			//-----------------------------------------------------
			if (cod=='Portuguesa') {
				var option = document.createElement("option");
				option.text = "Agua Blanca";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Araure";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Esteller";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Guanare";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Guanarito";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Monseñor José Vicenti de Unda";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Ospino";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Páez";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Papelón";
				x.add(option);

				var option = document.createElement("option");
				option.text = "San Genaro de Boconoíto";
				x.add(option);

				var option = document.createElement("option");
				option.text = "San Rafael de Onoto";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Santa Rosalía";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Sucre";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Turén";
				x.add(option);
			}
			//-----------------------------------------------------
			if (cod=='Sucre') {
				var option = document.createElement("option");
				option.text = "Andres Eloy Blanco";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Andres Mata";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Arismendi";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Benítez";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Bermúdez";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Bolívar";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Cajigal";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Cruz Salmeron Acosta";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Libertador";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Mariño";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Mejía";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Montes";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Ribero";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Sucre";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Valdez";
				x.add(option);
			}
			//-----------------------------------------------------
			if (cod=='Táchira') {
				var option = document.createElement("option");
				option.text = "Andres Bello";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Antonio Romulo Costa";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Ayacucho";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Bolívar";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Cardenas";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Córdoba";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Fernandez Feo";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Francisco de Miranda";
				x.add(option);

				var option = document.createElement("option");
				option.text = "García de Hevia";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Guásimos";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Independencia";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Jáuregui";
				x.add(option);

				var option = document.createElement("option");
				option.text = "José María Vargas";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Junín";
				x.add(option);

				var option = document.createElement("option");
				option.text = "San Judas Tadeo";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Libertad";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Libertador";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Lobatera";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Michelena";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Panamericano";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Pedro María Ureña";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Rafael Urdaneta";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Samuel Dario Maldonado";
				x.add(option);

				var option = document.createElement("option");
				option.text = "San Cristóbal";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Seboruco";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Simón Rodriguez";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Sucre";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Torves";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Uribante";
				x.add(option);

			}
			//-----------------------------------------------------
			if (cod=='Trujillo') {
				var option = document.createElement("option");
				option.text = "Andres Bello";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Boconó";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Bolívar";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Candelaria";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Carache";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Escuque";
				x.add(option);

				var option = document.createElement("option");
				option.text = "José Felipe Marquez Cañizalez";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Juan Vicente Campos Elías";
				x.add(option);

				var option = document.createElement("option");
				option.text = "La Ceiba";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Miranda";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Pampán";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Trujillo";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Andres Linares";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Pampanito";
				x.add(option);
			}
			//-----------------------------------------------------
			if (cod=='Vargas') {
				var option = document.createElement("option");
				option.text = "Vargas";
				x.add(option);
			}
				//-----------------------------------------------------
			if (cod=='Yaracuy') {
				var option = document.createElement("option");
				option.text = "Arístides Bastias";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Bolívar";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Bruzual";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Cocorote";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Independencia";
				x.add(option);
			}
			//--------------------------
			if (cod=='Zulia') {
				var option = document.createElement("option");
				option.text = "Almirante Padilla";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Baralt";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Cabimas";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Catatumbo";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Colón";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Francisco Javier Pulgar";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Jesús Enrique Losada";
				x.add(option);

				var option = document.createElement("option");
				option.text = "Jesús María Semprún";
				x.add(option);
			}
			//--------------------------
			if (cod=='Distrito Capital') {
				var option = document.createElement("option");
				option.text = "Libertador";
				x.add(option);
			}
		}