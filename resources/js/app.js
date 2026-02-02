import './bootstrap';
import Alpine from 'alpinejs';

import calculatorLogic from './calculator-logic';

Alpine.data('calculatorData', calculatorLogic);
window.Alpine = Alpine;
Alpine.start();