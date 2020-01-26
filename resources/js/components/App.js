import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import BrandOption from './BrandOption';
import SizeOption from './SizeOption';
import CategoryOption from './CategoryOption';
import Product from './Product';
import { css } from "@emotion/core";
import ClipLoader from "react-spinners/ClipLoader";

export default class App extends Component{
    constructor(){
        super();
        this.state = {
            server: {
                brands: [],
                maxPrice : '',
                categories : [],
                sizes : []
            },
            client: {
                brands : [],
                maxPrice : '',
                categories : [],
                sizes : []
            },
            products: [],
            isLoadingProducts : false
        }
        this.handleBrandsClient = this.handleBrandsClient.bind(this)
        this.getProducts = this.getProducts.bind(this)
        this.handMaxPriceClient = this.handMaxPriceClient.bind(this)
        this.handleCategoriesClient = this.handleCategoriesClient.bind(this)
        this.handleSizesClient = this.handleSizesClient.bind(this)
        
    }
    
    componentDidMount(){
        axios.get('api/options').then(response =>{
            this.setState({
                server: response.data
            })
        }).catch(error =>{
            console.log(error);
        })
    }

    getProducts(){
        this.setState({
            isLoadingProducts : true
        })
        setTimeout(() => {
            axios.get('api/products',{
                params: {
                    brands :this.state.client.brands.join(),
                    maxPrice : this.state.client.maxPrice,
                    sizes : this.state.client.sizes.join(),
                    categories : this.state.client.categories.join()
                }
            }).then(response => {
                this.setState({
                    products : response.data,
                    isLoadingProducts : false
                })
                console.log(this.state.products)
            }).catch( error => {
                console.log(error)
            })
        },1000)
        
    }

    handleBrandsClient(event){
        const client = Object.assign({},this.state.client);
        const value = event.currentTarget.value;
        if(!client.brands.includes(value))
            client.brands.push(value);
        else
            client.brands.splice(client.brands.indexOf(value),1); 
        this.setState({
            client:client
        },() => {
            this.getProducts();
        });
    }

    handMaxPriceClient(event){
        const value = event.currentTarget.value;
        const client = Object.assign({},this.state.client); // copie d'un objet != slice()
        client.maxPrice = value;
        this.setState({ 
            client : client
        });
    }

    handleCategoriesClient(event){
        const client = Object.assign({},this.state.client);
        const value = event.currentTarget.value;
        if(!client.categories.includes(value))
            client.categories.push(value);
        else
            client.categories.splice(client.categories.indexOf(value),1); 
        this.setState({
            client:client
        },() => {
            this.getProducts();
        });
    }

    handleSizesClient(event){
        const client = Object.assign({},this.state.client);
        const value = event.currentTarget.value;
        if(!client.sizes.includes(value))
            client.sizes.push(value);
        else
            client.sizes.splice(client.sizes.indexOf(value),1); 
        this.setState({
            client:client
        },() => {
            this.getProducts();
        });
    }

    render(){
        const isLoadingProducts = this.state.isLoadingProducts
        const length = this.state.products.length
        return(
            <div>
                <div className="container options">
                    <div className="row justify-content-around">
                        <div className="col-md-3 d-flex border-right justify-content-around">
                            {this.state.server.brands.map(opt => (
                                <BrandOption key={opt.id} handleBrandsClient={this.handleBrandsClient} opt={opt} />
                            ))}
                        </div>
                        <div className="col-md-3 d-flex border-right justify-content-around">
                            <input className="custom-range" value={this.state.client.maxPrice} onMouseUp={this.getProducts} onChange={this.handMaxPriceClient}  type="range" min="1" max={this.state.server.maxPrice} />
                            <label>{this.state.client.maxPrice}</label>
                        </div>

                        <div className="col-md-3 d-flex border-right justify-content-around">
                            {this.state.server.categories.map(opt => (
                                <CategoryOption key={opt.id} handleCategoriesClient={this.handleCategoriesClient} opt={opt} />
                            ))}
                        </div>
                        <div className="col-md-3 d-flex justify-content-around">
                        {this.state.server.sizes.map((opt, index) => (
                            <SizeOption key={index} handleSizesClient={this.handleSizesClient} opt={opt} />
                        ))}
                        </div>
                    </div>
                </div>
                <div className="container-fluid container-custom">
                    <div className="row justify-content-around">
                        <ClipLoader loading={isLoadingProducts}/>
                        {!isLoadingProducts && length > 0 ?(
                            this.state.products.map(opt => (
                                <Product key={opt.id} opt={opt} />
                            ))
                        ) : "Aucun produit ne correspond à votre recherche"
                        }
                    </div>
                </div>   
            </div>
        )
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<App />, document.getElementById('example'));
}