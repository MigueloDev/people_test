import axios from 'axios'
import React, { useState } from 'react'
import { useForm } from '../hooks'
import { Results } from './Results'
export const Search = () => {

  const {search, onInputChange, onResetForm} = useForm({search : ''})

  const [currentState, setState] = useState({
    isLoading : false,
    data : null,
    hasError : null,
  })

  const [validationError, setValidationErros] = useState(null)

  const getData = async (event) => {
    event.preventDefault();

    if(isNaN(search) && search.length <= 2){
      setValidationErros(true)
      return
    }
    setValidationErros(null)
    setState((prevState) => ({
      ...prevState,
      isLoading:true
    }))
    try{

      const {data, status} = await axios.post('/api/getProduct', {search})
      setState((prevState) => ({
        ...prevState,
        data,
        isLoading:false
      }))

    }catch(error){
      setState((prevState) => ({
        ...prevState,
        hasError:true
      }))
    }finally{
      setState((prevState) => ({
        ...prevState,
        isLoading:false
      }))
      onResetForm()
    }
  }

  return (
    <>
      <div className='d-flex col-12'>
        <div className='row col-12 align-items-center'>
          <div className='col-3 offset-1'>
            <p>Busque su producto</p>
          </div>
          <div className='col-6'>
            <form onSubmit={getData}>
              <div className="input-group mb-3">
                  <input 
                  type="text" 
                  className="form-control" 
                  name='search'
                  value={search}
                  onChange={onInputChange}
                  />
              </div>
                  {
                    validationError && (
                      <p class="text-muted">Deben escribir al menos 3 caracteres!</p>
                    )
                  }
            </form>
          </div>
        </div>
      </div>

      <Results {...currentState}/>
    </>
  )
}
