const { createApp } = Vue;
createApp({
  data() {
    return {
      functions: [
        {
          name: "abs($numero)",
          description:
            "La funzione abs() restituisce il valore assoluto di un numero, cioè il suo valore numerico senza il segno.",
          variousInputs: false,
          link: "https://www.w3schools.com/php/func_math_abs.asp",
        },
        {
          name: "round($numero, $precisione)",
          description:
            "La funzione round() arrotonda un numero al numero intero più vicino. È possibile specificare una precisione opzionale per arrotondare il numero a un numero specifico di decimali.",
          variousInputs: true,
          link: "https://www.w3schools.com/php/func_math_round.asp",
        },
        {
          name: "ceil($numero)",
          description:
            "La funzione ceil() arrotonda un numero all'intero successivo più grande o uguale.",
          variousInputs: false,
          link: "https://www.w3schools.com/php/func_math_ceil.asp",
        },
        {
          name: "floor($numero)",
          description:
            "La funzione floor() arrotonda un numero all'intero precedente più piccolo o uguale.",
          variousInputs: false,
          link: "https://www.w3schools.com/php/func_math_floor.asp",
        },
        {
          name: " sqrt($numero)",
          description:
            "La funzione sqrt() calcola la radice quadrata di un numero.",
          variousInputs: false,
          link: "https://www.w3schools.com/php/func_math_sqrt.asp",
        },
        {
          name: " pow($base, $esponente)",
          description: "La funzione pow() calcola una potenza di un numero.",
          variousInputs: true,
          link: "https://www.w3schools.com/php/func_math_pow.asp",
        },
        {
          name: "rand($minimo, $massimo):",
          description:
            "La funzione rand() genera un numero casuale compreso tra il valore minimo e il valore massimo specificati.",
          variousInputs: true,
          link: "https://www.w3schools.com/php/func_math_rand.asp",
        },
        {
          name: "min($numero1, $numero2):",
          description:
            "La funzione min() restituisce il valore minimo tra un insieme di numeri.",
          variousInputs: true,
          link: "https://www.w3schools.com/php/func_math_min.asp",
        },
        {
          name: "max($numero1, $numero2):",
          description:
            "La funzione max() restituisce il valore massimo tra un insieme di numeri.",
          variousInputs: true,
          link: "https://www.w3schools.com/php/func_math_max.asp",
        },
        {
          name: "fmod($numero1, $numero2)",
          description:
            "La funzione fmod() restituisce il resto della divisione tra due numeri",
          variousInputs: true,
          link: "https://www.w3schools.com/php/func_math_fmod.asp",
        },
      ],
    };
  },
  methods: {},
}).mount("#app");
