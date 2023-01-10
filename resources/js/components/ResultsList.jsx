import React, { useEffect } from 'react'

import { ProductCard } from './ProductCard'
export const ResultsList = ({data}) => {

  return (
    <>
      <div className="row row-cols-1 row-cols-md-3 mb-3 text-center">
      {
        data.map(product => (
          <ProductCard product={product} key={product.id}/>
        ))
      }
      </div>
    </>
  )
}
