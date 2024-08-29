import axios from 'axios';

export const FETCH_USERS = 'FETCH_USERS';
export const ADD_USER = 'ADD_USER';
export const UPDATE_USER = 'UPDATE_USER';
export const DELETE_USER = 'DELETE_USER';

export const fetchUsers = () => async (dispatch) => {
  try {
    const response = await axios.get('/api/users');
    dispatch({ type: FETCH_USERS, payload: response.data });
  } catch (error) {
    console.error(error);
  }
};

export const addUser = (userData) => async (dispatch) => {
  try {
    const response = await axios.post('/api/users', userData);
    dispatch({ type: ADD_USER, payload: response.data });
  } catch (error) {
    console.error(error);
  }
};

export const updateUser = (id, userData) => async (dispatch) => {
  try {
    const response = await axios.put(`/api/users/${id}`, userData);
    dispatch({ type: UPDATE_USER, payload: response.data });
  } catch (error) {
    console.error(error);
  }
};

export const deleteUser = (id) => async (dispatch) => {
  try {
    await axios.delete(`/api/users/${id}`);
    dispatch({ type: DELETE_USER, payload: id });
  } catch (error) {
    console.error(error);
  }
};
