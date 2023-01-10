import React, { useEffect } from 'react'

export const ProductCard = ({product}) => {

  return (
    <>
      <div className="col">
        <div className="card mb-4 rounded-3 shadow-sm">
          <div className="card-header py-3">
            <h4 className="my-0 fw-normal">{product.description}</h4>
          </div>
          <div className="card-body">
          {
            product.has_discount && (
              <>
              <h1 className="card-title pricing-card-title">{product.half_price}
                <small className="text-muted fw-light">$</small>
              </h1>
                <ul className="list-unstyled mt-3 mb-4">
                  <li><b>Marca : </b>{ product.brand}</li>
                  <li><span className='badge bg-primary'>Producto a mitad de precio!</span></li>
                  <li>Antes {product.price}$</li>
                </ul>
              <button type="button" className="w-100 btn btn-lg btn-outline-primary">Comprar</button>
              </>
            )
          }
          {
            !product.has_discount && (
            <>
            <h1 className="card-title pricing-card-title">{product.price}
              <small className="text-muted fw-light">$</small>
            </h1>
              <ul className="list-unstyled mt-3 mb-4">
                <li><b>Marca : </b>{ product.brand}</li>
                <li>{product.description}</li>
              </ul>
            <button type="button" className="w-100 btn btn-lg btn-outline-primary">Comprar</button>
            </>
            )
          }
          </div>
        </div>
      </div>
    </>
  )
}
