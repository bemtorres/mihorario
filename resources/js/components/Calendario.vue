<template>
  <div>
    <h4 class="card-title">Calendario - Semana {{ semana  }} </h4>
    <div class="d-flex justify-content-between mb-3">

      <div class="">

        <button type="button" @click="changeShowPrincing()" class="btn btn-secondary btn-sm btn-cp-secondary rounded-pill">
          Valores: {{ this.showPricing ? 'SI' : 'NO' }}
        </button>
        <button type="button" @click="changeShowRoom()" class="ms-2 btn btn-secondary btn-sm btn-cp-secondary rounded-pill">
          Sala: {{ this.showRoom ? 'SI' : 'NO' }}
        </button>
      </div>

      <div class="btn-group" role="group" aria-label="Basic outlined example">
        <button type="button" class="btn btn-outline-primary" @click="handleWeek(false)">&lt;</button>
        <button type="button" class="btn btn-outline-primary" @click="handleWeek(true)">></button>
      </div>
    </div>
    <div class="table-responsive">
      <div class="table-responsive">
        <table class="table table-hover table-sm table-bordered align-middle text-center">
            <tbody>
              <FilaDias :semana-actual="this.semana" />
              <tr>
                <td></td>
                <td><small>LUNES</small></td>
                <td><small>MARTES</small></td>
                <td><small>MIERCOLES</small></td>
                <td><small>JUEVES</small></td>
                <td><small>VIERNES</small></td>
                <td><small>SABADO</small></td>
              </tr>
              <tr v-for="c in this.selectSemana().data">
                <td  width="100px"><small>{{ c.horario.inicio + " - " + c.horario.termino }}</small></td>
                <td v-for="i in 6">
                  <span v-if="c[i-1].length > 0" v-for="detalle in c[i-1]">
                    <Item v-if="detalle != []"
                      :detalle="detalle"
                      :show-pricing="this.showPricing"
                      :show-room="this.showRoom"
                    />
                  </span>
                </td>
              </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>

import Item from './Item.vue';
import FilaDias from './FilaDias.vue';

export default {
  name: "Calendario",
  props: ['calendario'],
  components: {
    Item,
    FilaDias
  },
  data() {
    return {
      min: 0,
      max: 19,
      count: 0,
      semana: 0,
      horario: [],
      showPricing: false,
      showRoom: false,
      fechas: [],
    };
  },
  methods: {
    handleWeek(next) {
      if (next) {
        if (this.semana == 19) {
          this.semana = 0;
        } else {
          this.semana++;
        }
      } else {
        if (this.semana == 0) {
          this.semana = 19;
        } else {
          this.semana--;
        }
      }
    },
    changeShowPrincing() {
      this.showPricing = !this.showPricing;
    },
    changeShowRoom() {
      this.showRoom = !this.showRoom;
    },
    selectSemana() {
      return this.calendario[this.semana];
    },
  }
};
</script>
