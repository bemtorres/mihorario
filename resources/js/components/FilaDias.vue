<template>
  <tr>
    <td></td>
    <td v-for="fecha in fechas" :key="fecha.fecha.getTime()">{{ fecha.fecha.getDate() }}-{{ mesesAbreviados[fecha.fecha.getMonth()] }}</td>
  </tr>
</template>


<script>
export default {
  name: "FilaDias",
  props: ['semana'],
  props: {
    semanaActual: {
      type: Number,
      default: 0,
    },
  },
  data() {
    return {
      semana: this.semanaActual,
      fechas: [],
      mesesAbreviados: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
      inicioSemana: new Date(2023, 0, 3), // Lunes 3 de Abril de 2023
    };
  },
  created() {
    // Inicializar la matriz de fechas con la semana actual
    this.generarFechasSemana(this.semana);
  },
  methods: {
    generarFechasSemana(semana) {
      // Calcular la fecha del primer día de la semana
      const fechaLunes = new Date(this.inicioSemana.getTime() + semana * 7 * 86400000);

      // Generar las fechas para la semana
      this.fechas = Array.from({ length: 6 }, (_, i) => {
        const fecha = new Date(fechaLunes);
        fecha.setDate(fecha.getDate() + i);
        return { fecha, diaSemana: i };
      });
    },
    semanaAnterior() {
      if (this.semana == 0) {
        this.semana = 19;
      } else {
        this.semana -= 1;
      }
      this.generarFechasSemana(this.semana);
    },
    siguienteSemana() {
      if (this.semana == 19) {
        this.semana = 0;
      } else {
        this.semana += 1;
      }
      this.generarFechasSemana(this.semana);
    },
  },
  watch: {
    semanaActual(nuevaSemana) {
      this.semana = nuevaSemana;
      this.generarFechasSemana(this.semana);
    },
  },
};
</script>
