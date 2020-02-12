<template>
  <div id="app">
    <div v-for="game in this.games" class="game-wrapper">
        <div class="container game-cont">
            <div class="row" :id="game.id">
                <div class="col-md-4">
                    <img v-bind:src="game.cover" class="game-cover">
                </div>
                <div class="col-md-8">
                    <h3 class="game-name">{{ game.name }}</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <label>Release Date:</label>
                        <p class="game-release">{{ game.release }}</p>
                      </div>
                      <div class="col-md-6">
                        <label>Genre:</label>
                        <p class="game-genre">{{ game.genre }}</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label>Region:</label>
                        <p class="game-region">{{ game.region }}</p>
                      </div>
                      <div class="col-md-6">
                        <label>Rating:</label>
                        <p class="game-rating">{{ game.rating }}</p>
                      </div>
                    </div>
                    <p class="game-summary">{{ game.summary }}</p>
                </div>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
    props: ['games'],
    mounted () {
      console.dir(this.games)
    }

  }
</script>
