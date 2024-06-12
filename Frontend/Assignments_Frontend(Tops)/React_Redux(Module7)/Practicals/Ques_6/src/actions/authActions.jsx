import axios from 'axios';

export const REGISTER_SUCCESS = 'REGISTER_SUCCESS';
export const LOGIN_SUCCESS = 'LOGIN_SUCCESS';
export const LOGOUT = 'LOGOUT';

export const register = (userData) => async (dispatch) => {
  try {
    const response = await axios.post('/api/register', userData);
    dispatch({ type: REGISTER_SUCCESS, payload: response.data });
  } catch (error) {
    console.error(error);
  }
};

export const login = (userData) => async (dispatch) => {
  try {
    const response = await axios.post('/api/login', userData);
    dispatch({ type: LOGIN_SUCCESS, payload: response.data });
  } catch (error) {
    console.error(error);
  }
};

export const logout = () => (dispatch) => {
  dispatch({ type: LOGOUT });
};
