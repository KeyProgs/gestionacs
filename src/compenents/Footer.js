import React, {Component} from 'react';
import { Button } from '@material-ui/core';
import PropTypes from 'prop-types';

class Footer extends Component {
    render() {
        return (
            <div>
                return <Button color="primary success">Hello World</Button>;
                <Button variant="contained" color="primary">
                    Hello World
                </Button>
                Footer is here... !!!!?????
            </div>
        );
    }
}

Footer.propTypes = {};

export default Footer;