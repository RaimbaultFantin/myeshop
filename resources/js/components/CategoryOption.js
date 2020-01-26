import React, { Component } from 'react';

export default class CategoryOption extends Component { 

    render(){

        const { opt, handleCategoriesClient } = this.props;
        
        return(
            <label className="chck-primary">
                <p>{opt.name}</p>
                <input onClick={handleCategoriesClient} type="checkbox" value={opt.name}/>
                <span className="checkmark"></span>
            </label>
        )
    }
}