import React from 'react';
import { createRoot } from 'react-dom/client'
import { App } from './components/App';
import '../css/app.css'

export default function Main(){
    return(
    <React.StrictMode>
        <App />
    </React.StrictMode>
    );
}

if(document.getElementById('root')){
    createRoot(document.getElementById('root')).render(<Main />)
}