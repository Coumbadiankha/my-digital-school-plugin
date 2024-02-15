<?php

namespace Coumbita;

class TemperatureConverter
{
    /**
     * Convertit la température en fonction de l'unité spécifiée.
     *
     * @param float $temperature La température à convertir.
     * @param string $unit L'unité de conversion ('celsius_to_fahrenheit' ou 'fahrenheit_to_celsius').
     * @return float La température convertie.
     * @throws \InvalidArgumentException Si l'unité spécifiée n'est pas prise en charge.
     */
    public function convert($temperature, $unit)
    {
        switch ($unit) {
            case 'celsius_to_fahrenheit':
                return $this->celsiusToFahrenheit($temperature);
            case 'fahrenheit_to_celsius':
                return $this->fahrenheitToCelsius($temperature);
            default:
                throw new \InvalidArgumentException("Unité non prise en charge : $unit");
        }
    }

    /**
     * Convertit une température de Celsius à Fahrenheit.
     *
     * @param float $celsius La température en degrés Celsius.
     * @return float La température convertie en degrés Fahrenheit.
     */
    private function celsiusToFahrenheit($celsius)
    {
        return ($celsius * 9/5) + 32;
    }

    /**
     * Convertit une température de Fahrenheit à Celsius.
     *
     * @param float $fahrenheit La température en degrés Fahrenheit.
     * @return float La température convertie en degrés Celsius.
     */
    private function fahrenheitToCelsius($fahrenheit)
    {
        return ($fahrenheit - 32) * 5/9;
    }
}
