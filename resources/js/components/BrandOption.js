import React, { Component } from 'react';

export default class BrandOption extends Component {

    render(){

        const { opt, handleBrandsClient } = this.props
        
        return(
            <label className="chck-primary">
                <p>{opt.name}</p>
                <input onClick={handleBrandsClient} type="checkbox" value={opt.name}/>
                <span className="checkmark"></span>
            </label>
        )
    }
}