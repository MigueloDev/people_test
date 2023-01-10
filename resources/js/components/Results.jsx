import React, { useEffect } from 'react'
import { ResultsList } from './ResultsList'

export const Results = ({data, isLoading, hasError}) => {
  
  useEffect(() => {
  }, [])
  

  return (
    <>

      {
        data?.length === 0 && (
          <div className="alert alert-danger" role="alert">
            No se encontraron productos 
          </div>
        )
      }

      {
        isLoading && (
          <div className="alert alert-primary" role="alert">
            Buscando Productos
          </div>
        )
      }

      {
        data?.length > 0 && (<ResultsList data={data}/>)
      }
    </>
  )
}
