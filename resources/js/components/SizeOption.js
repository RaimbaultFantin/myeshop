import React, { Component } from 'react';

export default class SizeOption extends Component {

    render(){

        const { opt, handleSizesClient } = this.props;

        return(
            <label className="chck-primary">
                <p>{opt.size}</p>
                <input onClick={handleSizesClient} type="checkbox" value={opt.size}/>
                <span className="checkmark"></span>
            </label>
        )
    }
}