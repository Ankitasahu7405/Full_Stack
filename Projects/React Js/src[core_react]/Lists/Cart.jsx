import React from 'react'
import { useState } from 'react';

function Cart() {
    const [count, setCount] = useState(0);

    const handleIncrement = () => {
        setCount(count + 1);
    };

    const handleDecrement = () => {
        if (count > 0) {
            setCount(count - 1);
        }
    };
  return (
    <>
    <div style={{display:"flex"}}>
        <button typee="button" style={{margin:"2px",padding:"5px"}} onClick={handleIncrement}>Increment</button>
        <h2>Counter: {count}</h2>
        <button type='button' style={{margin:"2px",padding:"5px"}} onClick={handleDecrement}>Decrement</button>
    </div>
    </>
  );
}

export default Cart
