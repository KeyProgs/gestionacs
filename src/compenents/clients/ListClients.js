import React, { Component } from 'react';
import AdminLTE, { Sidebar, Content, Row, Col, Box, Button } from 'adminlte-2-react';

const { Item } = Sidebar;

class ListClients extends Component {
    state = {clients:fetch('https://jsonplaceholder.typicode.com/users')
            .then(response => response.json())
            .then(json => console.log(json))
    }

    render() {
        return (
            <Content title="Liste des clients" subTitle="Getting started with adminlte-2-react" browserTitle="Hello World">
            <Row>
                <table class="table table-hover  table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">city</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>

                    </tbody>
                </table>
            </Row>
        </Content>);
    }
}

export default ListClients;