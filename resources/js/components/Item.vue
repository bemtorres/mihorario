<template>
  <div class="">
    <button type="button" class="btn btn-sm position-relative text-white" :style="{'background-color': this.detalle.background }">
      <small>{{  this.detalle.actividad }}</small>
      <small v-if="this.showPricing">
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
          $ {{ this.detalle.precio[1] }}
        </span>
      </small>

      <span v-if="this.showRoom" class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-secondary">
        {{ this.detalle.sala  }}
      </span>

      <span v-if="this.detalle.isBono" class="position-absolute top-50 start-0 translate-middle pe-4">
        ⭐
      </span>
    </button>
  </div>
</template>

<script>
export default {
  name: "Item",
  props: ['detalle','showPricing','showRoom'],

};
</script>
