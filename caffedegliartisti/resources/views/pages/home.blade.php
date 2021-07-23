@extends ('layouts.main-layout')

@section('content')
<main id=appHome>
    <section class="sectionOne" :style="{ backgroundImage: 'url(' + jumboCollection[jumboCounter] + ')' }"
    @mouseover="arrowVisibility = true"
    @mouseleave="arrowVisibility = false"
    > 

            <div v-if="arrowVisibility" class="jumboArrowContainer arrowLeft" href="" v-on:click="nextJumbo">
                <i class="fas fa-chevron-left"></i>
            </div>
+
            <div v-if="arrowVisibility" class="jumboArrowContainer arrowRight" href="" v-on:click="prevJumbo">
                <i class="fas fa-chevron-right"></i>
            </div>

    </section>

    <section class="sectionTwo">
        <div v-for="offer in offersCollection" class="artCard">
            <img :src="offer.logo" alt="">
            <h1>@{{offer.titolo}}</h1>
            <h2>@{{offer.descrizione}}</h2>
        </div>
    </section>

</main>
<script>

new Vue({
	el: "#appHome",
    data: {
      // frecce del jumbotron
      arrowVisibility: false,
      //   contenitore immagini Jumbotron
      jumboCounter: 0,
      jumboCollection: [
        "/storage/assets/homeSliderUno.jpg",
        "/storage/assets/homeSliderDue.jpg",
        "/storage/assets/homeSliderTre.jpg"
      ],
      

      offersCollection: [
        ristorante = {
            titolo: "RISTO",
            descrizione: "Pausa pranzo a 10€, 100% Italiana! E fa niente se fa caldo, disponiamo sia di un’area esterna che una interna climatizzata",
            logo: "/storage/assets/homeLogoUno.png"
        },
        bar = {
            titolo: "COCKTAIL&BAR",
            descrizione: "Sfiziosi antipasti, gustosi primi, secondi e pizze tradizionali cotte in forno a legna. Scopri tutti i nostri menu",
            logo: "/storage/assets/homeLogoDue.png"
        },
        gelateria = {
            titolo: "GELATERIA",
            descrizione: "Novità: ora anche gelateria produzione artigianale, aperti dalle ore 14:00 alle ore 18:00 con servizio asporto",
            logo: "/storage/assets/homeLogoTre.png"
        }
        
        
      ]
  },

  mounted() {
            
        },
        
        methods: {


            nextJumbo: function () {
                console.log(this.jumboCounter);
                if(this.jumboCounter === this.jumboCollection.length - 1) {
                this.jumboCounter = 0;
                } else {
                this.jumboCounter++;

            }
                },
                // slider che passa all'immagine precedente
            prevJumbo: function() {
                console.log(this.jumboCounter);
                this.jumboCounter--;
                if(this.jumboCounter < 0) {
                this.jumboCounter = this.jumboCollection.length -1;

                }
            }
        }
})

</script>


@endsection

