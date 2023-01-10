import React from 'react'
import { Header } from './Header'
import { Search } from './Search'
export const App = () => {
  return (
    <div className='container py-3'>
      <Header/>
      <Search/>
    </div>
  )
}
