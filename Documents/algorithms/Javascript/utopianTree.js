'use strict';

const fs = require('fs');

process.stdin.resume();
process.stdin.setEncoding('utf-8');

let inputString = '';
let currentLine = 0;

process.stdin.on('data', function(inputStdin) {
    inputString += inputStdin;
});

process.stdin.on('end', function() {
    inputString = inputString.split('\n');

    main();
});

function readLine() {
    return inputString[currentLine++];
}

/*
 * Complete the 'utopianTree' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

function utopianTree(n) {
    // Write your code here
   let heights=[];
   for(let i = 0;i<=n;i++)
   {
       if(i==0)
       {
           heights.push(1);
       }
       if(i > 0 && i%2!==0)
       {
           let newHeight = heights[heights.length-1];
           console.log(newHeight)
           heights.push(newHeight*2);
       }
       else if(i > 0 && i%2==0)
       {
           let newHeight2 = heights[heights.length-1];
           heights.push(newHeight2 + 1)
       }
   }
   
   return Math.max(...heights)
   

}

function main() {
    const ws = fs.createWriteStream(process.env.OUTPUT_PATH);

    const t = parseInt(readLine().trim(), 10);

    for (let tItr = 0; tItr < t; tItr++) {
        const n = parseInt(readLine().trim(), 10);

        const result = utopianTree(n);

        ws.write(result + '\n');
    }

    ws.end();
}
