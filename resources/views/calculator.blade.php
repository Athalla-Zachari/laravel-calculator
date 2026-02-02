<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div x-data="{
    display:'0',
    operator: null,
    prevValue: null,
    newNumber: true,

    setNumber(number){
        if(this.display === '0' || this.newNumber){
            this.display = number;
            this.newNumber = false;
        }else{
            this.display += number;  {{-- misal angka 3, kemudian angka selanjutnya 5 makan menjadi 35 (concatenation) --}}
        }
    },
    
    setOperator(op){
        this.prevValue = parseFloat(this.display);
        this.operator = op;
        this.newNumber = true;
    },
    
    calculate(){
        let current = parseFloat(this.display);
        let result = 0;

        if(this.operator === '+') result = this.prevValue + current;
        if(this.operator === '-') result = this.prevValue - current;
        if(this.operator === '*') result = this.prevValue * current;
        if(this.operator === '/') result = this.prevValue / current;

        this.display = String(result);
        this.newNumber = true;
    }


    
    }" 
    class="bg-white p-6 rounded-xl shadow-xl w-72">
        <div class=" bg-black text-white text-right text-4xl rounded p-4 mb-4">
            <span x-text="display"></span>
        </div>
        
        <div class="grid grid-cols-4 gap-2 ">
            <button @click="setNumber('7')" class=" bg-gray-200 p-2 rounded font-bold hover:bg-gray-300">7</button>
            <button @click="setNumber('8')" class=" bg-gray-200 p-2 rounded font-bold hover:bg-gray-300">8</button>
            <button @click="setNumber('9')" class=" bg-gray-200 p-2 rounded font-bold hover:bg-gray-300">9</button>

            <button @click="setOperator('+')" class=" bg-amber-500 font-bold rounded-full mx-1.5 hover:bg-amber-600">+</button>

            <button @click="setNumber('4')" class=" bg-gray-200 p-2 rounded font-bold hover:bg-gray-300">4</button>
            <button @click="setNumber('5')" class=" bg-gray-200 p-2 rounded font-bold hover:bg-gray-300">5</button>
            <button @click="setNumber('6')" class=" bg-gray-200 p-2 rounded font-bold hover:bg-gray-300">6</button>

            <button @click="setOperator('-')" class=" bg-amber-500 font-bold rounded-full mx-1.5 hover:bg-amber-600">-</button>

            <button @click="setNumber('1')" class=" bg-gray-200 p-2 rounded font-bold hover:bg-gray-300">1</button>
            <button @click="setNumber('2')" class=" bg-gray-200 p-2 rounded font-bold hover:bg-gray-300">2</button>
            <button @click="setNumber('3')" class=" bg-gray-200 p-2 rounded font-bold hover:bg-gray-300">3</button>

            <button @click="setOperator('*')" class=" bg-amber-500 font-bold rounded-full mx-1.5 hover:bg-amber-600">x</button>

            <button @click="display = '0'" class="bg-red-500 text-white p-4 rounded font-bold hover:bg-red-600">C</button>
            <button @click="setNumber('0')" class="bg-gray-200 p-4 rounded font-bold hover:bg-gray-300">0</button>
            <button @click="calculate()" class=" bg-green-500 text-white p-4 rounded font-bold hover:bg-green-600">=</button>
            <button @click="setOperator('/')" class=" bg-amber-500 font-bold rounded-full mx-1.5 hover:bg-amber-600">÷</button>
        </div>
    </div>

</body>
</html>